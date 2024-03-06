<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/header.php");
?>

<!-- <header id="header-menu">
        <i id="menu-abrir" class="fa-solid fa-bars toggle-menu"></i>
</header> 
DON'T KNOW WHAT THIS IS
-->
<main>
    <section id="conteudo">
        <div id="grafico-botoes">
            <section id="grafico">
                <canvas id="donut"></canvas>
            </section>
            <section id="botoes">
                <a href="./carEntry.php" class="btn" id="registrar">
                    <i class="fa-solid fa-circle-chevron-right"></i>
                    <p class="text-button">Registrar entrada</p>
                </a>
                <a href="<?= $coreUrl?>src/views/carExit.php" class="btn" id="baixa">
                    <i class="fa-solid fa-circle-chevron-right fa-rotate-180"></i>
                    <p class="text-button">Registrar saída</p>
                </a>
                <a href="./vagas-lista.html" class="btn">
                    <p class="text-button">Vagas</p>
                </a>
            </section>
        </div>
        <section id="vagas">
            
        </section>
    </section>
</main>
<script src="../../../assets/resources/js/common.js"></script>
<script src="../../../assets/resources/js/pagina-principal.js"></script>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/gerenciador-estacionamento/templates/footer.php");
?>