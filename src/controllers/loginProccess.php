<?php

    // Important files import ################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/coreUrl.php");
    // Models import #########################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/src/models/UserDAO.php");
    // Model classes declaration #############################
    $userDAO = new UserDAO($conn, $coreUrl);

    // $data = ["username" => "edu", "email" => "", "enterprise" => "", "password" => "", "photo" => "", "token" => ""];

    // $user = $userDAO->create($data);

    // echo $user->getProperty("username");

    // Input filtering #######################################
    $username = filter_input(INPUT_POST, "username");
    $password = filter_input(INPUT_POST, "password");
    // Login verification ####################################
    $userDAO->validateLogin($username, $password);

    //print_r($userDAO->findByUsername($username));

?>