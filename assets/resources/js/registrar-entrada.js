let color = '';

/* ----------------------------------------------------
#################### SELEÇÃO DE COR ###################
---------------------------------------------------- */

$(".color-pick").on('click', (e)=> {
    let width = $(e.target).css("border-width");

    $("#color-picker > div").css('border-color', 'black');
    $("#color-picker > div").css('border-width', width);
    $(e.target).css('border-width', '8px');
    $(e.target).css('border-color', 'gray');
    color = $(e.target).css('background-color');
})

/* ----------------------------------------------------
################### VALIDAÇÃO DO FORM #################
---------------------------------------------------- */

$("#submit").on('click', function validarForm(e) {
    e.preventDefault();
    // Se o form estiver ok, pega os dados e coloca no localStorage
    if((document.querySelector("form").checkValidity())) {
        
        if((JSON.parse(localStorage.getItem('vaga')) != null)) {
            const vaga = Number(JSON.parse(localStorage.getItem('vaga')));
            if(vaga <= 100) localStorage.setItem('vaga', vaga + 1);
        }
        else {
            localStorage.setItem('vaga', 1);
        }

        var carro = {
            modelo: $("#modelo").val(),
            cor: color,
            hora: new Date().getTime()
        }

        let placa = $("#placa").val();

        localStorage.setItem(placa, JSON.stringify(carro));

        window.location.href="../../../app/sucesso-registro.html"
    }
    else { //Caso o form esteja errado, ativa o popup de erro
        $("#blur").css('display', 'block');
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
