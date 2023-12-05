/*-------------------------------------------------
################### SUBMIT #########################
------------------------------------------------- */ 
$("#submit").on('click', (e)=> {
    e.preventDefault();

    if($("#pass").val() != $("#passConf").val()) {
        $("pass").parent().css("border-color", "red");
        $("#pass").parent().next("small").html("Senhas não conferem!");
        $("#passConf").parent().next("small").html("Senhas não conferem!");
        $("#pass").parent().next("small").css("visibility", "visible");
        $("#passConf").parent().next("small").css("visibility", "visible");
        $("#pass").parent().css("border-color", "red");
        $("#passConf").parent().css("border-color", "red");
    }
    else {
        $("#pass").parent().next("small").css("visibility", "hidden");
        $("#passConf").parent().next("small").css("visibility", "hidden");
    }

    const form = document.querySelector("form");
    if(!(form.checkValidity())) {
        
    }
});

/*-------------------------------------------------
################# VALIDAÇÃO #######################
------------------------------------------------- */

$("input").on('keyup', (e)=> {
    if(!(e.target.checkValidity())) {
        $(e.target).parent().css("border-color", "red");
        $(e.target).parent().next("small").css("visibility", "visible");
        $(e.target).parent().next("small").html("Entrada inválida!");
    }
    else {
        $(e.target).parent().css("border-color", "#1A5B8D");
        $(e.target).parent().next("small").css("visibility", "hidden");
    }
})

/*-------------------------------------------------
############### REVELAR SENHA #####################
------------------------------------------------- */

$(".fa-eye").on('click', (e)=> {
    const state = $(e.target).prev('input').attr('type');
    if(state == 'password') {
        $(e.target).prev('input').attr('type', 'text');
    }
    else {
        $(e.target).prev('input').attr('type', 'password');
    }
    
})
