<?php

    Class Car {
        private $model;
        private $plate;
        private $color;
        private $entry;

        // Getter ######################################

        public function getProperty($property) {
            return $this->$property;
        }

        // Setter ######################################

        public function setProperty($property, $newProperty) {
            $this->$property = $newProperty;
        }
    }

    interface CarDAOInterface {
        // Constructors ################################

        // Creates an user obj.
        public function create($data);
        // Creates an user on the DB using an user obj.
        public function buildCar(Car $car);

        // Finders #####################################

        public function findById($id);
        public function findByPlate($plate);

        // Delete ######################################

        public function delete($identifier);
    }

    Class CarDAO implements CarDAOInterface {
        private $conn;
        private $coreUrl;

        public function __construct(PDO $conn, $coreUrl) {
            $this->conn = $conn;
            $this->coreUrl = $coreUrl;
        }

        // Constructors ################################

        // Creates an user obj.
        public function create($data) {
            $car = new Car();

            $car->setProperty("model", $data["model"]);
            $car->setProperty("licensePlate", $data["licensePlate"]);
            $car->setProperty("color", $data["color"]);
            $car->setProperty("entry", $data["entry"]);

            return $car;
        }

        // Creates an user on the DB using an user obj.
        public function buildCar(Car $car) {
            // Building prepared statement
            $stmt = $this->conn->prepare("INSERT INTO cars (model, licensePlate, color, entry) VALUES (:model, :licensePlate, :color, :entry)");
            // Binding values tinto the prepared statement
            $stmt->bindValue(":model", $car->getProperty("model"));
            $stmt->bindValue(":licensePlate", $car->getProperty("licensePlate"));
            $stmt->bindValue(":color", $car->getProperty("color"));
            $stmt->bindValue(":entry", ($car->getProperty("entry")));
            // Query execution
            $stmt->execute();
        }


        // Finders #####################################

        public function findById($id) {

        }

        public function findByPlate($plate) {

        }


        // Delete ######################################

        public function delete($identifier) {

        }


    }

?>