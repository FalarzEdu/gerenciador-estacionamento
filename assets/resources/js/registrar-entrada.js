let color = '';

$(".color-pick").on('click', (e)=> {
    $("#color-picker > div").css('border-color', 'black')
    $("#color-picker > div").css('border-width', '4px')
    $(e.target).css('border-width', '8px');
    $(e.target).css('border-color', 'gray');
    color = $(e.target).css('background-color');
})

$("#submit").on('click', function validarForm(e) {
    e.preventDefault();
    if((document.querySelector("form").checkValidity())) {
        /*
        GUARDAR DADOS NO BANCO
        */
        window.location.href="../../../app/sucesso-registro.html"
    }
    else {
        $("#blur").css('display', 'block');
        $("#popup").css('display', 'flex');
    }
})

function fechar() {
    $("#blur").css('display', 'none');
        $("#popup").css('display', 'none');
}
