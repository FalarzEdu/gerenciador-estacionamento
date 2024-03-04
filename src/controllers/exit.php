<?php
    // Important files import ################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/coreUrl.php");
    // Models import #########################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/src/models/UserDAO.php");
    // Model classes declaration #############################
    $userDAO = new UserDAO($conn, $coreUrl);
    // Logout ################################################
    $userDAO->logout();