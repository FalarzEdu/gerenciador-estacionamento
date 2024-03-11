<?php
// Important files import ################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/coreUrl.php");
    // Utilities import ######################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/src/utils/Message.php");
    // Models import #########################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/src/models/CarDAO.php");
    // Classes declaration ###################################
    $carDAO = new CarDAO($conn, $coreUrl);
    $message = new Message($coreUrl);
    // Fetch HTTP request handling ###########################

    return json_encode($carDAO->freeSpots());
    