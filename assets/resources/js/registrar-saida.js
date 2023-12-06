/* ----------------------------------------------------
################## VALIDAÇÃO DA PLACA #################
---------------------------------------------------- */
$("#placa").on('keyup', function checarPlaca() {
    const placa = $("#placa").val()
    if(placa.length == 7) {
        const carro = JSON.parse(localStorage.getItem(placa));
        if(carro != null) { // Se a placa existir, coloca os dados do carro
            $("#modelo").text(carro.modelo);
            $("#cor").css('background-color', carro.cor);
        }
        else { // Se a placa não existir, ativa o popup de erro
            $("#blur").css('display', 'block');
            $("#popup").css('display', 'flex');
        }
    }
})

/* ----------------------------------------------------
#################### VALIDAÇÃO FORM ###################
---------------------------------------------------- */

$("#submit").on('click', function validarCampos(e) {
    e.preventDefault()
    const form = document.querySelector("form");
    if(form.checkValidity()) {
        window.location.href="../../../app/sucesso-baixa.html"
    }
})

/* ----------------------------------------------------
##################### FECHA O POPUP ####################
---------------------------------------------------- */

function fechar() {
    $("#blur").css('display', 'none');
    $("#popup").css('display', 'none');
}

