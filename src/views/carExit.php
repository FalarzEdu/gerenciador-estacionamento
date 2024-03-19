<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/header.php");
?>

<main class="h-auto lg:h-[77vh]">
    <form action="<?= $coreUrl?>src/controllers/carExitProccess.php" method="POST" class="lg:flex lg:flex-col">
        <section class="lg:border-[6px] lg:border-blue-700 lg:mx-16 lg:px-[1%] lg:py-8      lg:rounded-3xl lg:grid lg:grid-cols-3 lg:grid-rows-1 lg:h-auto">
            <section class="h-[30vh] w-full lg:h-[45vh] lg:w-auto lg:order-2">
                <div class=" bg-blue-700 h-[5vh] lg:h-[7vh] lg:max-h-14 2xl:h-[10vh] 2xl:max-h-16 flex justify-center items-center border-t-[3px] border-b-[3px] border-black lg:border-none lg:rounded-2xl lg:w-[90%] lg:mx-[5%] 2xl:w-4/5 2xl:mx-[10%]">
                    <p class="text-tag font-comic uppercase text-white">Placa</p>
                </div>
                <div class="lg:flex lg:justify-center lg:items-center lg:h-[37vh]">
                    <div class="w-[260px] mx-auto mt-[5vh] scale-120 relative 2xl:scale-150">
                        <img src="<?= $coreUrl?>public/assets/images/placa.svg" alt="" class="relative scale-110 md:scale-150 lg:scale-125">
                        <input type="text" name="licensePlate" id="licensePlate" class="absolute text-black left-[15px] top-[25px] font-comic text-[46px] text-center w-[230px] h-[60px] bg-transparent uppercase scale-110 md:scale-150 lg:scale-125" pattern="([a-z]{3})(\d{1})([a-z]{1})(\d{2})" maxlength="7" minlength="7" required>
                    </div>
                </div>
                
            </section>
            <section class="flex flex-col w-full h-auto md:h-[20vh] lg:h-[45vh] lg:w-auto lg:order-1">
                <div class=" bg-blue-700 h-[5vh] flex justify-center items-center border-t-[3px] border-b-[3px] border-black lg:max-h-14 2xl:h-[10vh] 2xl:max-h-16 lg:border-none lg:rounded-2xl lg:w-[90%] lg:mx-[5%] 2xl:w-4/5 2xl:mx-[10%]">
                    <p class="text-tag font-comic uppercase text-white">Modelo</p>
                </div>
                <div class="lg:flex lg:items-center h-[10vh] lg:h-[37vh]">
                    <div type="text" placeholder="Digite o modelo do veículo" class="h-[5vh] w-[85vw] text-left text-base md:h-[8vh] md:w-[50vw] 2xl:text-2xl font-comic mt-[2.5vh] ml-[7.5vw] md:ml-[25vw] border-4 border-blue-700 rounded-lg lg:w-[80%] lg:p-0 lg:mx-[10%]">
                        <p  id="model" class="font-comic uppercase text-black text-base md:text-3xl md:h-[8vh] md:leading-[7vh] lg:text-xl lg:leading-10 2xl:text-2xl text-center"></p>
                    </div>
                </div>
                
            </section>
            <section class="h-auto w-full lg:order-3">
                <div class=" bg-blue-700 h-[5vh] lg:h-[7vh] lg:max-h-14 2xl:h-[10vh] 2xl:max-h-16 flex justify-center items-center border-t-[3px] border-b-[3px] border-black lg:border-none lg:rounded-2xl lg:w-[90%] lg:mx-[5%] 2xl:w-4/5 2xl:mx-[10%]">
                    <p class="text-lg font-comic uppercase text-white">Cor</p>
                </div>
                <div class="lg:flex lg:justify-center lg:items-center lg:h-[37vh]">
                    <div class="w-1/2 h-[12.5vh] max-w-[13rem] max-h-[8rem] border-4 border-blue-700 flex justify-center items-center m-auto mt-[5vh] lg:m-0 rounded-lg">
                        <div id="color" class="bg-black w-3/4 h-2/3 rounded-full"></div>
                    </div>
                </div>
            </section>
        </section>
        <section class="h-auto mt-[5vh] flex justify-center items-center lg:gap-28">
            <button id="submit" class="btn border-red-700 hover:bg-red-300">
                <i class="fa-solid fa-rotate-180 fa-circle-chevron-right btn-pointer-icon text-red-700"></i>
                <p class="text-red-700 text-button m-auto text-center pl-8 font-bold text-2xl md:text-3xl lg:text-2xl">Registrar saída</p>
            </button>
            <a class="hidden lg:flex btn w-64 border-blue-700 lg:hover:bg-blue-300" href="<?=$coreUrl?>src/views/principalPage.php">
                <img src="<?= $coreUrl?>public/assets/images/seta.svg" alt="" class="text-[10vh] text-blue-700 absolute left-[25px]">
                <p class="text-blue-700 text-button m-auto text-center pl-8 font-bold lg:text-xl">Voltar</p>
            </a>
        </section>
    </form>
</main>

<!-- <div class="z-10 bg-opacity-75 bg-black w-full h-full fixed top-0 left-0 hidden" id="blur">
</div>
<div class="hidden flex-col justify-around items-center z-40 rounded-lg w-4/5 h-[30vh] lg:w-1/2 lg:h-1/2 fixed left-[10%] top-[35vh] lg:top-1/4 lg:left-1/4 bg-blue-700 shadow-black" id="popup">
    <h2 class="text-center text-3xl">Veículo inexistente!</h2>
    <div class="bg-white flex justify-center rounded-full">
        <button class="px-[3rem] py-[1rem] text-blue-700 text-lg" id="esconder" onclick="fechar()">OK</button>
    </div>
</div> -->
<script src="<?= $coreUrl?>public/assets/js/common.js"></script>
<script src="<?= $coreUrl?>public/assets/js/carExit.js"></script>