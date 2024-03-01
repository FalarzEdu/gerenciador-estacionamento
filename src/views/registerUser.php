<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/header.php");
?>

<main>
    <form action="<?php $_SERVER["DOCUMENT_ROOT"] ?>/gerenciador-estacionamento/src/controllers/registerProccess.php" method="POST" class="flex flex-col w-[90vw] m-auto lg:w-[30vw] lg:border-[5px] lg:rounded-2xl lg:border-blue-700 lg:px-4 lg:py-[3.5vh]" novalidate>
        <h1 class="text-[28px] font-goldman text-blue-700 m-auto mb-8">Crie sua conta</h1>
        <label for="name" class="text-blue-700 text-sm font-bold mb-2">Digite seu nome de usuário</label>
        <div class="lg:mb-2">
            <div class="border-2 rounded-md border-blue-700 h-[5vh] w-full">
                <input type="text" id="username" name="username" class="outline-none pl-2 h-full w-full" pattern="([A-ZÀ-Ú0-9]*[a-zà-ú0-9]*)+\.([A-ZÀ-Ú0-9]*[a-zà-ú0-9])+" placeholder="Usuário" required autocomplete="off">
            </div>
            <small class="text-red-600 text-sm invisible">Entrada inválida!</small>
        </div>
        
        <label for="pass" class="text-blue-700 text-sm font-bold mb-2">Digite sua senha</label>
        <div class="lg:mb-2">
            <div class="border-2 rounded-md border-blue-700 h-[5vh] pl-2">
                <input id="password" name="password" type="password" class="h-full w-[90%] lg:w-[85%] outline-none" minlength="6" placeholder="Senha" required autocomplete="off">
                <i class="fa-solid fa-eye text-[2.5vh]"></i>
            </div>
            <small class="text-red-600 text-sm invisible">Entrada inválida!</small>
        </div>

        <label for="passConf" class="text-blue-700 text-sm font-bold mb-2">Digite sua senha novamente</label>
        <div class="mb-3">
            <div class="border-2 rounded-md border-blue-700 h-[5vh]">
                <input id="passwordConf" name="passwordConf" type="password" class="h-full w-[90%] lg:w-[85%] outline-none pl-2"  minlength="6" placeholder="Confirmar senha" required autocomplete="off">
                <i class="fa-solid fa-eye text-[2.5vh]"></i>
            </div>
            <small class="text-red-600 text-sm invisible">Entrada inválida!</small>
        </div>

        <button id="submit" class="bg-green-500 h-[7vh] w-[90vw] rounded-lg m-auto flex items-center justify-center font-goldman text-white md:w-2/3 lg:h-16 lg:w-full">Registrar<button>
    </form>
</main>
<script src="<?php $_SERVER["DOCUMENT_ROOT"]?>/gerenciador-estacionamento/public/assets/js/register.js"></script>