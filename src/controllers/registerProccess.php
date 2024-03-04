<?php

    // Important files import ################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/coreUrl.php");
    // Utilities import ######################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/src/models/UserDAO.php");
    // Classes declaration ###################################
    $userDAO = new UserDAO($conn, $coreUrl);
    // Input filtering #######################################
    $username = filter_input(INPUT_POST, "username");
    $password = filter_input(INPUT_POST, "password");
    $passwordConf = filter_input(INPUT_POST, "passwordConf");
    // User Obj creation #####################################
    $user = new User();
    $user->setProperty("username", $username);
    $password = $user->generatePassword($password);
    $user->setProperty("password", $password);
    // Database user creation
    $userDAO->buildUser($user);