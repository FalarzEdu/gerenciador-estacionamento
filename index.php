<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/header.php");
?>

<main>
    <form action="<?php $_SERVER["DOCUMENT_ROOT"] ?>/gerenciador-estacionamento/src/controllers/loginProccess.php" method="POST" id="formLogin" novalidate class="flex flex-col w-[90vw] m-auto lg:w-[30vw] lg:border-[5px] lg:rounded-2xl lg:border-blue-700 lg:px-4 lg:py-[3.5vh]">
        <h1 class="text-[28px] font-goldman text-blue-700 m-auto mb-8">Log in to your account</h1>

        <label for="name" class="text-blue-700 text-sm font-bold mb-2">Username</label>
        <div class=" mb-2 flex flex-col">
            <div class="border-2 rounded-md border-blue-700 mb-1">
                <input type="text" id="name" class=" h-[5vh] w-full pl-3 outline-none" autofocus autocomplete="off" pattern="([A-ZÀ-Ú0-9]*[a-zà-ú0-9]*)+\.([A-ZÀ-Ú0-9]*[a-zà-ú0-9])+" required placeholder="Usuário">
            </div>
            <small class="text-red-600 text-sm invisible">Entrada inválida!</small>
        </div>
        <label for="password" class="text-blue-700 text-sm font-bold mb-2">Password</label>
        <div class="mb-2 outline-8 outline-green-700">
            <div class="h-[5vh] border-2 rounded-md border-blue-700">
                <input type="password" id="password" class="h-full w-[90%] pl-3 outline-none" autocomplete="off" required minlength="6">
                <i id="relevarSenha" class="fa-solid fa-eye text-[2.5vh]" aria-placeholder="Senha"></i>
            </div>
            <small class="text-sm text-red-600 invisible">Entrada inválida!</small>
        </div>

        <button type="submit" id="submit" class="bg-green-500 text-white h-[7vh] w-[90vw] mb-4 rounded-lg m-auto font-goldman text-lg block md:w-2/3 lg:h-14 lg:w-full">Log in</button>

        <a href="<?php $_SERVER["SERVER_NAME"]?>/gerenciador-estacionamento/src/views/registerUser.php" class="h-[7vh] w-[90vw] mb-8 rounded-lg m-auto  border-4 border-green-500 flex items-center justify-center font-goldman text-green-500 md:w-2/3 lg:mb-0 lg:h-14 lg:w-full">Register</a>

        <div>
            <label for="remember">Lembrar usuário</label>
            <input id="remember" type="checkbox">
        </div>
    </form>
</main>
<script src="<?php $_SERVER["DOCUMENT_ROOT"] ?>/gerenciador-estacionamento/public/assets/js/login.js"></script>

<?php require_once("templates/footer.php"); ?>
   