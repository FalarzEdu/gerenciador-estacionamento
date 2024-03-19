<?php
    // Important files import ################################
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/header.php");
    // Destroys session when the login page is loaded ########
    if($userDAO->verifyAuth()) {
        $userDAO->logout();
    }
?>

<main class="lg:flex lg:items-center lg:h-[80vh]">
    <form action="<?php $_SERVER["DOCUMENT_ROOT"] ?>/gerenciador-estacionamento/src/controllers/loginProccess.php" method="POST" id="formLogin" novalidate class="flex flex-col w-[90vw] m-auto lg:w-[40vw] lg:max-w-4xl xl:max-w-lg lg:border-[5px] lg:rounded-2xl lg:border-blue-700 lg:px-4 lg:py-[3.5vh] md:max-lg:gap-6">
        <h1 class="text-[28px] md:max-lg:text-5xl font-goldman text-blue-700 m-auto mb-4">Entre com sua conta</h1>
        <div class="md:w-2/3 m-auto">
            <label for="username" class="text-blue-700 text-sm md:max-lg:text-lg font-bold mb-1">Usuário</label>
            <div class="mb-2 lg:mb-0 flex flex-col">
                <div class="h-[6.5vh] max-h-12 md:max-lg:max-h-14 border-2 rounded-md border-blue-700 mb-1">
                    <input type="text" id="username" name="username" class="h-full w-full pl-3 outline-none md:max-lg:text-xl" autofocus autocomplete="off" pattern="([A-ZÀ-Ú0-9]*[a-zà-ú0-9]*)+\.([A-ZÀ-Ú0-9]*[a-zà-ú0-9])+" required placeholder="Usuário">
                </div>
                <small class="text-red-600 text-sm invisible md:max-lg:text-lg">Entrada inválida!</small>
            </div>
            <label for="password" class="text-blue-700 text-sm md:max-lg:text-lg font-bold mb-1">Senha</label>
            <div class="mb-2 outline-8 outline-green-700">
                <div class="flex items-center h-[6.5vh] max-h-12 md:max-h-14 border-2 rounded-md border-blue-700">
                    <input type="password" id="password" name="password" class="h-full w-max pl-3 outline-none flex-1 md:max-lg:text-xl" autocomplete="off" required minlength="6">
                    <i id="relevarSenha" class="fa-solid fa-eye text-[2.5vh] w-min basis-[2.5vh] pr-2" aria-placeholder="Senha"></i>
                </div>
                <small class="text-sm text-red-600 invisible">Entrada inválida!</small>
            </div>

            <button type="submit" id="submit" class="bg-green-500 text-white h-[8vh] max-h-16 w-[90vw] mb-4 rounded-lg m-auto font-goldman text-lg md:text-xl lg:text-base block md:w-full lg:h-12 lg:w-full">Log in</button>

            <a href="<?php $_SERVER["SERVER_NAME"]?>/gerenciador-estacionamento/src/views/registerUser.php" class="h-[8vh] max-h-16 w-[90vw] mb-8 rounded-lg m-auto border-4 border-green-500 flex items-center justify-center font-goldman text-lg md:text-xl lg:text-base text-green-500 md:w-full lg:mb-0 lg:h-12 lg:w-full">Register</a>

            <div>
                <label for="remember" class="md:text-2xl lg:text-lg">Lembrar usuário</label>
                <input id="remember" class="md:max-lg:w-5 md:max-lg:h-5 md:max-lg:ml-2 lg:mt-4" type="checkbox">
            </div>
        </div>
    </form>
</main>
<script src="<?php $_SERVER["DOCUMENT_ROOT"] ?>/gerenciador-estacionamento/public/assets/js/login.js"></script>

<?php require_once("templates/footer.php"); ?>
   