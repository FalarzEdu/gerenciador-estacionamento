<?php

    Class Car {
        private $model;
        private $licensePlate;
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
        public function findByPlate($licensePlate);

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

            $car->setProperty("model", strtolower($data["model"]));
            $car->setProperty("licensePlate", strtolower($data["licensePlate"]));
            $car->setProperty("color", $data["color"]);
            $car->setProperty("entry", $data["entry"]);

            return $car;
        }

        // Creates an user on the DB using an user obj.
        public function buildCar(Car $car) {
            // Building prepared statement
            $stmt = $this->conn->prepare("INSERT INTO cars (model, licensePlate, color, entry) VALUES (:model, :licensePlate, :color, :entry)");
            // Binding values tinto the prepared statement
            $stmt->bindValue(":model", strtolower($car->getProperty("model")));
            $stmt->bindValue(":licensePlate", strtolower($car->getProperty("licensePlate")));
            $stmt->bindValue(":color", $car->getProperty("color"));
            $stmt->bindValue(":entry", ($car->getProperty("entry")));
            // Query execution
            $stmt->execute();
        }


        // Finders #####################################

        public function findById($id) {

        }

        public function findByPlate($licensePlate) {
            // Building prepared statement
            $stmt = $this->conn->prepare("SELECT * FROM cars WHERE licensePlate = :licensePlate");
            // Binding values tinto the prepared statement
            $stmt->bindValue(":licensePlate", strtolower($licensePlate));
            // Query execution
            $stmt->execute();
            // Query result return
            return $this->create($stmt->fetch(PDO::FETCH_ASSOC));
        }


        // Delete ######################################

        public function delete($identifier) {

        }


    }

?>