<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/header.php");
?>

<body class="h-screen max-h-screen w-screen flex flex-col justify-center items-center">
<main class="flex flex-col items-center h-auto lg:w-1/2 lg:h-[90%] lg:justify-between">
    <section class="mb-16 text-center lg:mb-8">
        <i class="fa-solid fa-circle-check text-[20vw] text-green-500 mb-4 lg:text-[10vw]"></i>
        <p class="text-[10vw] font-comic lg:text-[5vw]">Baixa efetuada!</p>
    </section>
    <section class="h-2/4 bg-blue-700  w-full rounded-lg mb-16">
        <header class="mb-8">
            <h3 class="font-comic text-white text-center pt-4 text-[6vw] lg:text-[2.5vw]">Tempo de permanência:</h3>
        </header>
        <div class="flex w-full justify-around text-white">
            <div class="text-center text-[4vw] lg:text-[1.5vw]">
                <h4 class="mb-6">Dias</h4>
                <p id="dia">0</p>
            </div>
            <div class="text-center text-[4vw] lg:text-[1.5vw]">
                <h4 class="mb-6">Horas</h4>
                <p id="hora">0</p>
            </div>
            <div class="text-center text-[4vw] lg:text-[1.5vw]">
                <h4 class="mb-6">Minutos</h4>
                <p id="minuto">0</p>
            </div>
        </div>
    </section>
    <a href="../principais/pagina-principal.html" class="bg-blue-700 h-[5rem] w-[85vw] rounded-lg flex items-center justify-center lg:w-1/2">
        <p class="text-white text-[5vw] font-goldman lg:text-[3vw]">Voltar</p>
    </a>
</main>
<script src="../../../assets/resources/js/sucesso-baixa.js"></script>