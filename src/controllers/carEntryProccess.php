<?php
    // Important files import ################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/coreUrl.php");
    // Models import #########################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/src/models/CarDAO.php");
    // Model classes declaration #############################
    $carDAO = new CarDAO($conn, $coreUrl);
    // Input filter ##########################################
    $model = filter_input(INPUT_POST, "model");
    $plate = filter_input(INPUT_POST, "licensePlate");
    $color = filter_input(INPUT_POST, "color");
    // Car obj creation ######################################
    $car = new Car();
    // Car properties set ####################################
    $car->setProperty("model", $model);
    $car->setProperty("licensePlate", $plate);
    $car->setProperty("color", $color);
    // Timezone set
    date_default_timezone_set("America/Sao_Paulo");
    // Request of the actual date
    $entry = date('Y-m-d H:i:s');
    //echo $entry;
    $car->setProperty("entry", $entry);
    //Database car creation #################################
    $carDAO->buildCar($car);
    // Header to principal page ##############################
    header("location:" . $coreUrl . "src/views/principalPage.php");
?>