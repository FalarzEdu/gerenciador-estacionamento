<?php
    // Important files import ################################
    //require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/autoImportClasses.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/connect.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/config/coreUrl.php");
    // Utilities import ######################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/src/utils/Message.php");
    // Models import #########################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/src/models/UserDAO.php");
    // Classes declaration ###################################
    $userDAO = new UserDAO($conn, $coreUrl);
    $message = new Message($coreUrl);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!---- Styles --------------------------------------------->

        <link rel="stylesheet" href="http://<?=$_SERVER["SERVER_NAME"]?>/gerenciador-estacionamento/public/assets/css/style.css">

        <!--- Font styles --------------------------------------------------------------------->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">

        <!--- Font Awesome ----------------------------------------->

        <script src="https://kit.fontawesome.com/4b312f8f26.js" crossorigin="anonymous"></script>

        <!---- Jquery ----------------------------------------------->
        
        <script src="<?php $_SERVER["DOCUMENT_ROOT"] ?>/gerenciador-estacionamento/public/assets/libraries/jquery/dist/jquery.min.js"></script>

        <title>E-stacionar</title>
    </head>

    <!------------------- Authenticated user -------------------------->
    <?php if($userDAO->verifyAuth()): ?>

    <body class="h-screen max-h-screen">
        <header class="h-[7vh] flex items-center justify-between bg-white lg:bg-blue-700 lg:h-[17vh] lg:mb-2 lg:justify-between">
            <a href="http:// <?php $_SERVER["SERVER_NAME"] ?> /gerenciador-estacionamento/src/views/principalPage.php" class="lg:hidden"><i class="fa-solid fa-arrow-right fa-rotate-180 h-[30px] w-[30px] text-[30px] ml-5 text-blue-700 lg:hidden"></i></a>
            <i id="menu-abrir" class="fa-solid fa-bars h-[30px] w-[30px] text-[30px] mr-5 text-blue-700 lg:!hidden toggle-menu"></i>

            <div class="hidden lg:flex justify-center items-center h-[85%] w-auto">
                <img src="http://<?=$_SERVER["SERVER_NAME"]?>/gerenciador-estacionamento/public/assets/images/Logo.svg" class="h-[95%] w-auto pl-16" alt="">
            </div>
            <div class="lg:pr-16 text-white uppercase font-comic hidden lg:block text-menu">
                <a href="../cadastro-info/cep.html">Configurações</a>
                <a href="" class="px-8">Sobre</a>
                <a href="http://<?=$_SERVER["SERVER_NAME"]?>/gerenciador-estacionamento/src/controllers/exit.php">Sair</a>
            </div>
        </header>

    <!------------------- Unauthenticated user -------------------------->
    <?php else: ?>

        <header class="flex justify-center items-center px-8 bg-blue-700 w-full h-[20vh] mb-[2.5vh] lg:h-[17vh] lg:mb-2 lg:justify-between">
            <div class="flex justify-center items-center h-[85%] w-auto">
                <img src="<?php $coreUrl?>public/assets/images/Logo.svg" class="h-[95%] w-auto lg:h-full lg:w-auto" alt="">
            </div>
            <div class="pr-16 uppercase font-comic hidden lg:block">
                <a href="" class="text-white">Sobre</a>
            </div>
        </header>

    <?php endif; ?>

    <!------------------------ Message -------------------------------->
    <?php if(isset($_SESSION["message"])):?>
    <aside 
        class="w-min h-auto text-white rounded-md m-auto mb-2 <?=$_SESSION["status"]?>">
        <p class="px-6 py-2 whitespace-nowrap uppercase"><?=$_SESSION["message"]?></p>
    </aside>
    <?php
        $_SESSION["message"] = null;
        endif;
    ?>