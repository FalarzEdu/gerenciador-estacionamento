<?php

    class User {
        private $id;
        private $username;
        private $email;
        private $enterprise;
        private $password;
        private $photo;
        private $token;

        // Getter ######################################

        public function getProperty($property) {
            return $this->$property;
        }

        // Setter ######################################

        public function setProperty($property, $newProperty) {
            $this->$property = $newProperty;
        }

        // Generators ##################################

        public function generatePassword($password) {
            return password_hash($password, PASSWORD_DEFAULT);
        }

        public function generateToken() {
            return bin2hex(random_bytes(50));
        }
    }

    interface UserDAOInterface {
        // Constructors ################################

        // Creates an user obj.
        public function create($data);
        // Creates an user on the DB using an user obj.
        public function buildUser(User $user);

        // Finders #####################################

        public function findById($id);
        public function findByUsername($username);

        // Validators ##################################

        // Verify if the user is logged using his token. Returns user data if true. Redirects to login if false.
        public function verifyToken($token);
        // Verify if the user is authenticated; Denies access to all pages if not.
        public function verifyAuth();

        // Data checkers / modifiers ###################

        public function validateLogin($username, $login);
        public function changePassword($password, $newPassword);
        public function update($column, $newData, $identifierColumn);
        public function delete(User $user);
    }

    Class UserDAO implements UserDAOInterface {
        private $conn;
        private $coreUrl;

        public function __construct(PDO $conn, $coreUrl) {
            $this->conn = $conn;
            $this->baseUrl = $coreUrl;
        }

        // Constructors ################################

        // Creates an user obj.
        public function create($data) {
            $user = new User();

            $user->setProperty("username", $data["username"]);
            $user->setProperty("email", $data["email"]);
            $user->setProperty("enterprise", $data["enterprise"]);
            $user->setProperty("password", $data["password"]);
            $user->setProperty("photo", $data["photo"]);
            $user->setProperty("token", $data["token"]);

            return $user;
        }

        // Creates an user on the DB using an user obj.
        public function buildUser(User $user) {
            $stmt = $this->conn->prepare("INSERT INTO users (username, password, photo) VALUES (:username, :password, :photo)");

            $stmt->bindValue(":username", $username = $user->getProperty("username"));
            $stmt->bindValue(":password", $password = $user->getProperty("password"));
            $stmt->bindValue(":photo", $_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/public/assets/images/users/user.png");

            //$stmt->execute();
        }


        // Finders #####################################

        public function findById($id) {

        }

        public function findByUsername($username) {

        }


        // Validators ##################################

        // Verify if the user is logged using his token. Returns user data if true. Redirects to login if false.
        public function verifyToken($token) {

        }

        // Verify if the user is authenticated Denies access to all pages if not.
        public function verifyAuth() {

        }


        // Data checkers / modifiers ###################

        public function validateLogin($username, $login) {

        }

        public function changePassword($password, $newPassword) {

        }

        public function update($column, $newData, $identifierColumn) {

        }

        public function delete(User $user) {

        }

    }