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

<body class="h-screen lg:grid lg:grid-cols-10">
    <header class="h-[8vh] max-h- flex items-center justify-between bg-white border-b-2 border-black lg:bg-blue-700 lg:h-[17vh] lg:mb-2 lg:justify-between lg:border-none lg:col-start-4 lg:col-end-11 lg:row-start-1 lg:row-end-3 z-10">
        <a href="<?= $coreUrl?>gerenciador-estacionamento/src/views/principalPage.php" class="lg:hidden  md:scale-125"><i class="fa-solid fa-arrow-right fa-rotate-180 h-[30px] w-[30px] text-[30px] ml-5 text-blue-700 lg:hidden"></i></a>
        <i id="menu-icon" class="fa-solid fa-bars h-[30px] w-[30px] text-[30px] mr-5 text-blue-700 lg:!hidden toggle-menu md:scale-125"></i>
        <div class="hidden lg:flex justify-center items-center h-[85%] w-auto">
            <img src="<?= $coreUrl?>/public/assets/images/Logo.svg" class="h-[95%] w-auto pl-16" alt="">
        </div>
        <div class="lg:pr-16 text-white uppercase font-comic hidden lg:block text-menu">
            <a href="../cadastro-info/cep.html">Configurações</a>
            <a href="" class="px-8">Sobre</a>
            <a href="http://<?=$_SERVER["SERVER_NAME"]?>/gerenciador-estacionamento/src/controllers/exit.php">Sair</a>
        </div>
    </header>

    <main class="grid h-[92vh] lg:h-screen lg:grid-cols-10 lg:col-start-1 col-end-11 lg:row-start-1 lg:row-end-2">
        <section class="flex flex-col max-lg:justify-between lg:grid lg:gap-1 lg:row-start-1 lg:row-end-2 lg:col-start-1 lg:col-end-4">
            <section class="flex flex-col justify-center items-center h-[14vh] bg-blue-700 text-white font-goldman lg:h-[17vh] ">
                <h2 class="text-3xl md:text-5xl lg:text-3xl">Available spots</h2>
                <p class="text-3xl md:text-5xl lg:text-3xl">
                    <span class="text-green-500 text-5xl md:text-7xl lg:text-5xl font-bold">60</span>
                    <span class="text-5xl md:text-7xl lg:text-5xl">/</span>
                    100
                </p>
            </section>
            <section class="flex justify-center w-[38vh] max-w-xl mx-auto">
                <canvas id="donut" class=""></canvas>
            </section>
            <section class="flex flex-col gap-[1vh] self-end h-min mx-auto mb-4 text-xl lg:h-min lg:text-lg">
                <a href="./carEntry.php" class="border-green-500 hover:bg-green-300 btn lg:h-[3.5rem] lg:w-[16rem]" id="carEntry">
                    <i class="fa-solid fa-circle-chevron-right text-green-500 btn-pointer-icon lg:text-[3.5rem]"></i>
                    <p class="text-green-500 m-auto text-center pl-8 font-bold text-xl md:text-2xl lg:text-xl">Registrar entrada</p>
                </a>
                <a href="<?= $coreUrl?>src/views/carExit.php" class="border-red-700 hover:bg-red-400 btn lg:h-[3.5rem] lg:w-[16rem]" id="carExit">
                    <i class="fa-solid fa-circle-chevron-right fa-rotate-180 text-red-700 btn-pointer-icon lg:text-[3.5rem]"></i>
                    <p class="text-red-700 m-auto text-center pl-8 font-bold text-xl md:text-2xl lg:text-xl">Registrar saída</p>
                </a>
                <a href="./vagas-lista.html" class="border-blue-700 hover:bg-blue-400 btn lg:h-[3.5rem] lg:w-[16rem]">
                    <p class="text-blue-700 m-auto text-center font-bold">Vagas</p>
                </a>
            </section>
        </section>
        <section id="spots" class="hidden lg:col-start-4 lg:col-end-11 lg:grid lg:pt-[20vh] lg:pb-[6vh]
        lg:pr-[2vh] lg:grid-cols-20 lg:grid-rows-4 gap-2">
        </section>
    </main>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script src="<?= $coreUrl?>public/assets/js/common.js"></script> -->
<script src="<?= $coreUrl?>public/assets/js/principalPage.js"></script>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/footer.php");
?>