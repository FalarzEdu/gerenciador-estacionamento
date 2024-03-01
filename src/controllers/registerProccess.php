<?php

    // Important files import ################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/coreUrl.php");
    // Models import #########################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/src/models/UserDAO.php");
    // Models classes declaration ############################
    $userDAO = new UserDAO($conn, $coreUrl);
    // Input filtering #######################################
    $username = filter_input(INPUT_POST, "username");
    $password = filter_input(INPUT_POST, "password");
    $passwordConf = filter_input(INPUT_POST, "passwordConf");
    // User Obj creation #####################################
    if($password == $passwordConf) {
        $user = new User();
        $user->setProperty("username", $username);
        $password = $user->generatePassword($password);
        $user->setProperty("password", $password);

        $userDAO->buildUser($user);
    }
    // Return to login #######################################
    header("location:" . $coreUrl . "index.php");

?>