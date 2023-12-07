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
            $("#popup").children("h2").text("Placa inexistente!");
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

        const vaga = Number(JSON.parse(localStorage.getItem('vaga')));
        if(vaga > 0) localStorage.setItem('vaga', vaga - 1);
    
        const placa = $("#placa").val();
        const obj = JSON.parse(localStorage.getItem(placa));
        const hora = obj.hora;
        sessionStorage.setItem('last', JSON.stringify(hora));
        localStorage.removeItem(placa);
        window.location.href="../../../app/sucesso-baixa.html";
    }
    else {
        $("#blur").css('display', 'block');
        $("#popup").children("h2").text("Preencha os campos corretamente!");
        $("#popup").css('display', 'flex');
    }
})

/* ----------------------------------------------------
##################### FECHA O POPUP ####################
---------------------------------------------------- */

function fechar() {
    $("#blur").css('display', 'none');
    $("#popup").css('display', 'none');
}

