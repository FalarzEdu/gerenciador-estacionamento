<?php

    // Important files import ################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/coreUrl.php");
    // Utilities import ######################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/src/models/UserDAO.php");
    // Classes declaration ###################################
    $userDAO = new UserDAO($conn, $coreUrl);
    $message = new Message($coreUrl);
    // Input filtering #######################################
    $username = filter_input(INPUT_POST, "username");
    $password = filter_input(INPUT_POST, "password");
    $passwordConf = filter_input(INPUT_POST, "passwordConf");
    // User Obj creation #####################################
    if($password === $passwordConf) {
        // User instantiation
        $user = new User();
        // User instance attributes creation
        $user->setProperty("username", $username);
        $password = $user->generatePassword($password);
        $user->setProperty("password", $password);
        // Database user creation
        $userDAO->buildUser($user);
    }
    else {
        $message->setMessage("Passwords don't match!", "error", "src/views/registerUser.php");
    }
    
    