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

    // Decodes data received from HTTP request
    $data = json_decode(file_get_contents("php://input"), true);
    // If "type" is set, this is the frontend request for the DB to check on a specific car license plate. If not, it is the form submission to delete the car on the DB.
    if(isset($data)) {
        if($carDAO->findByPlate($data["param"])) {
            // Retrieves data
            $car = $carDAO->findByPlate($data["param"]);
            // Insert data into an array so it can be encoded to JSON
            $arr = [$car->getProperty("model"), $car->getProperty("color"), $car->getProperty("entry")];
            // Returns the DB data encoded do JSON
            echo json_encode($arr);
        }
        else {
            // Sets HTTP response to 400 - Bad request in case of the plate not be found
            http_response_code(400);
        }
    }
    else {
        // Vehicle delete ########################################

        // Input filter
        $licensePlate = filter_input(INPUT_POST, "licensePlate");
        // Vehicle validation
        if($carDAO->findByPlate($licensePlate)) {
            $carDAO->delete($licensePlate);
            $message->setMessage("Vehicle unregistered successfully!", "success", "src/views/principalPage.php");
        }
    }