<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/header.php");
?>

<main class="h-auto lg:h-[77vh]">
    <form action="../controllers/carEntryProccess.php" method="POST" class="lg:flex lg:flex-col" novalidate>
        <section class="lg:border-[6px] lg:border-blue-700 lg:mx-16 lg:px-[1%] lg:py-8 lg:rounded-3xl lg:grid lg:grid-cols-3 lg:grid-rows-1 lg:h-auto">
            <section class="w-full h-auto md:h-[15vh] lg:h-[45vh] lg:w-auto lg:order-1">
                <div class=" bg-blue-700 h-[5vh] lg:h-[7vh] lg:max-h-14 2xl:h-[10vh] 2xl:max-h-16 flex justify-center items-center border-t-[3px] border-b-[3px] border-black lg:border-none lg:rounded-2xl lg:w-[90%] lg:mx-[5%] 2xl:w-4/5 2xl:mx-[10%]">
                    <p class="text-tag font-comic uppercase text-white md:text-xl lg:text-base">Modelo</p>
                </div>
                <div class="lg:flex lg:items-center h-[10vh] lg:h-[37vh]">
                    <input id="model" name="model" type="text" placeholder="Digite o modelo do veículo" class="text-black h-[5vh] md:h-[6vh] text-base md:text-2xl w-[85vw] lg:text-base 2xl:text-2xl font-comic mt-[2vh] ml-[7.5vw] mr-[7.5vw] border-4 border-blue-700 rounded-lg lg:w-[80%] lg:mx-[10%] uppercase text-center" pattern="[a-zA-Z]+" required autocomplete="off">
                </div>
            </section>
            <section class="h-[33vh] lg:h-auto w-full lg:order-3">
                <div class=" bg-blue-700 h-[5vh] lg:h-[7vh] lg:max-h-14 2xl:h-[10vh] 2xl:max-h-16 flex justify-center items-center border-t-[3px] border-b-[3px] border-black lg:border-none lg:rounded-2xl lg:w-[90%] lg:mx-[5%] 2xl:w-4/5 2xl:mx-[10%]">
                    <p class="text-tag font-comic uppercase text-white md:text-xl lg:text-base">Cor</p>
                </div>
                <div class="lg:flex lg:justify-center lg:items-end lg:h-[37vh]">
                    <div id="color-picker" class="w-full grid-cols-4 grid h-[28vh] lg:border-4 lg:border-blue-700 lg:rounded-2xl lg:p-2 lg:gap-1">
                        <input type="radio" class="bg-white color-pick" name="color" id="white" value="white">
                        <input type="radio" class="bg-black color-pick" name="color" id="black" value="black">
                        <input type="radio" class="bg-gray-600 color-pick" name="color" id="gray" value="gray-600">
                        <input type="radio" class="bg-red-600 color-pick" name="color" id="red" value="red-600">
                        <input type="radio" class="bg-blue-600 color-pick" name="color" id="blue" value="blue-600">
                        <input type="radio" class="bg-orange-900 color-pick" name="color" id="orange" value="orange-900">
                        <input type="radio" class="bg-yellow-400 color-pick" name="color" id="yellow" value="yellow-400">
                        <input type="radio" class="bg-green-500 color-pick" name="color" id="green" value="green-500">
                    </div>
                </div>
                
            </section>
            <section class="h-auto w-full lg:order-2">
                <div class=" bg-blue-700 h-[5vh] lg:h-[7vh] lg:max-h-14 2xl:h-[10vh] 2xl:max-h-16 flex justify-center items-center border-t-[3px] border-b-[3px] border-black lg:border-none lg:rounded-2xl lg:w-[90%] lg:mx-[5%] 2xl:w-4/5 2xl:mx-[10%]">
                    <p class="text-tag font-comic uppercase text-white md:text-xl lg:text-base">Placa</p>
                </div>
                <div class="lg:flex lg:flex-c lg:justify-center lg:items-center lg:h-[37vh]">
                    <div class="w-[260px] mx-auto mt-[4vh] scale-120 relative 2xl:scale-150 md:mt-[6vh] md:mb-[6vh]">
                        <img src="<?=$coreUrl?>public/assets/images/placa.svg" alt="" class="relative md:scale-150 lg:scale-125">
                        <input type="text" id="licensePlate" name="licensePlate" class="absolute text-black left-[15px] top-[25px] font-comic text-[46px] text-center w-[230px] h-[60px] bg-transparent uppercase md:scale-150 lg:scale-125" pattern="([a-z]{3})(\d{1})([a-z]{1})(\d{2})" maxlength="7" minlength="7" required>
                    </div>
                </div>
            </section>
        </section>
        <section class="h-auto mt-[4vh] flex justify-center items-center lg:gap-28">
            <button class="btn border-green-500 hover:bg-green-300" id="submit" type="submit">
                <i class="fa-solid fa-circle-chevron-right text-green-500 btn-pointer-icon"></i>
                <p class="text-green-500 text-button m-auto text-center pl-8 font-bold text-2xl  md:text-3xl lg:text-2xl">Registrar entrada</p>
            </button>
            <a class="btn hidden lg:flex border-blue-700 w-64 lg:hover:bg-blue-300" href=" <?=$coreUrl?>src/views/principalPage.php">
                <img src="<?=$coreUrl?>public/assets/images/seta.svg" alt="" class="text-[10vh] text-blue-700 absolute left-[25px]">
                <p class="text-blue-700 text-button m-auto text-center pl-8 font-bold lg:text-xl">Voltar</p>
            </a>
        </section>
    </form>
</main>
<!-- <div id="menu-lateral">
    <header>
        <i id="menu-fechar" class="fa-solid fa-xmark toggle-menu"></i>
    </header>
    <div id="menu">
        <a href="../cadastro-info/cep.html">
            <i class="fa-solid fa-gears"></i>
            <p>Configurações</p>
        </a>
        <a href="#">
            <i class="fa-solid fa-info"></i>
            <p>Sobre</p>
        </a>
        <a href="../../../login.html">
            <i class="fa-solid fa-right-from-bracket fa-rotate-180"></i>
            <p>Sair</p>
        </a>
    </div>
</div> -->

<!--  -->

<!-- <div class="z-10 bg-opacity-75 bg-black w-full h-full fixed top-0 left-0 hidden" id="blur">
</div>
<div class="hidden flex-col justify-around items-center z-40 rounded-lg w-4/5 h-[30vh] lg:w-1/2 lg:h-1/2 fixed left-[10%] top-[35vh] lg:top-1/4 lg:left-1/4 bg-blue-700 shadow-black" id="popup">
    <h2 class="text-center text-3xl">Preencha os dados corretamente!</h2>
    <div class="bg-white flex justify-center rounded-full">
        <button class="px-[3rem] py-[1rem] text-blue-700 text-lg" id="esconder" onclick="fechar()">OK</button>
    </div>
</div> -->
<script src="../../../assets/resources/js/common.js"></script>
<script src="../../../assets/resources/js/registrar-entrada.js"></script>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/footer.php");
?>