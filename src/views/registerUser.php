<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/header.php");
?>

<main class="lg:h-[80vh] lg:flex lg:items-center">
    <form action="<?php $_SERVER["DOCUMENT_ROOT"] ?>/gerenciador-estacionamento/src/controllers/registerProccess.php" method="POST" class="flex flex-col w-[90vw] m-auto lg:w-[40vw] lg:max-w-4xl xl:max-w-lg lg:border-[5px] lg:rounded-2xl lg:border-blue-700 lg:px-4 lg:py-[3.5vh] md:max-lg:gap-6" novalidate>
        <h1 class="text-[28px] md:max-lg:text-5xl font-goldman text-blue-700 m-auto mb-4">Crie sua conta</h1>
        <div class="md:w-2/3 m-auto">
            <label for="username" class="text-blue-700 text-sm md:max-lg:text-lg font-bold mb-1">Digite seu nome de usuário</label>
            <div class="md:mb-2 lg:mb-0 flex flex-col">
                <div class="h-[6.5vh] max-h-12 md:max-lg:max-h-14 border-2 rounded-md border-blue-700 mb-1">
                    <input type="text" id="username" name="username" class="h-full w-full pl-3 outline-none md:max-lg:text-xl" pattern="([A-ZÀ-Ú0-9]*[a-zà-ú0-9]*)+\.([A-ZÀ-Ú0-9]*[a-zà-ú0-9])+" placeholder="Usuário" required autocomplete="off">
                </div>
                <small class="text-red-600 text-sm invisible md:max-lg:text-lg">Entrada inválida!</small>
            </div>
            
            <label for="password" class="text-blue-700 text-sm md:max-lg:text-lg font-bold mb-1">Digite sua senha</label>
            <div class="md:mb-2 outline-8">
                <div class="flex items-center h-[6.5vh] max-h-12 md:max-h-14 border-2 rounded-md border-blue-700">
                    <input id="password" name="password" type="password" class="h-full w-max pl-3 outline-none flex-1 md:max-lg:text-xl" minlength="6" placeholder="Senha" required autocomplete="off">
                    <i class="fa-solid fa-eye text-[2.5vh] w-min basis-[2.5vh] pr-3"></i>
                </div>
                <small class="text-sm text-red-600 invisible">Entrada inválida!</small>
            </div>

            <label for="passwordConf" class="text-blue-700 text-sm md:max-lg:text-lg font-bold mb-1">Digite sua senha novamente</label>
            <div class="mb-2 outline-8">
                <div class="flex items-center h-[6.5vh] max-h-12 md:max-h-14 border-2 rounded-md border-blue-700">
                    <input id="passwordConf" name="passwordConf" type="password" class="h-full w-max pl-3 outline-none flex-1 md:max-lg:text-xl"  minlength="6" placeholder="Confirmar senha" required autocomplete="off">
                    <i class="fa-solid fa-eye text-[2.5vh] w-min basis-[2.5vh] pr-3"></i>
                </div>
                <small class="text-red-600 text-sm invisible">Entrada inválida!</small>
            </div>

            <div class="lg:flex lg:gap-2">
                <button id="submit" class="bg-green-500 text-white h-[8vh] max-h-16 w-[90vw] max-lg:mb-4 rounded-lg m-auto font-goldman text-lg md:text-xl lg:text-base block md:w-full lg:h-12 lg:w-full">Registrar</button>

                <a href="<?php $_SERVER["SERVER_NAME"]?>/gerenciador-estacionamento/index.php" class="h-[8vh] max-h-16 w-[90vw] mb-8 rounded-lg m-auto border-4 border-blue-700 flex items-center justify-center font-goldman text-lg md:text-xl lg:text-base text-blue-700 md:w-full lg:mb-0 lg:h-12 lg:w-full">Voltar</a>
            </div>
            
            
        </div>
    </form>
</main>
<script src="<?php $_SERVER["DOCUMENT_ROOT"]?>/gerenciador-estacionamento/public/assets/js/register.js"></script>