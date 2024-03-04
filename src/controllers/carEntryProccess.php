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
    // Input filter ##########################################
    $model = filter_input(INPUT_POST, "model");
    $plate = filter_input(INPUT_POST, "licensePlate");
    $color = filter_input(INPUT_POST, "color");
    // Car obj creation ######################################
    $car = new Car();
    // Car properties setting ################################
    $car->setProperty("model", $model);
    $car->setProperty("licensePlate", $plate);
    $car->setProperty("color", $color);
    // Timezone set
    date_default_timezone_set("America/Sao_Paulo");
    // Request of the actual date
    $entry = date('Y-m-d H:i:s');
    //echo $entry;
    $car->setProperty("entry", $entry);
    // Database car creation #################################
    // Verifies if the car is already parked
    if(!$carDAO->findByPlate($plate)) {
        // Creates the car in the database
        $carDAO->buildCar($car);
        $message->setMessage("Vehicle registered succesfully!", "success", "src/views/principalPage.php");
    }
    else {
        $message->setMessage("This vehicle is already registered!", "error", "src/views/carEntry.php");
    }