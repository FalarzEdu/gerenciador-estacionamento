/*-------------------------------------------------
################### SUBMIT #########################
------------------------------------------------- */ 

$("#submit").on('click', (e)=> {
    e.preventDefault();

    if((document.querySelector("form").checkValidity()) && ($("#pass").val() == $("#passConf").val())) {
        const obj = {
            nome: $("#name").val(),
            senha: $("#pass").val()
        }

        localStorage.setItem('usuario', JSON.stringify(obj));
        window.location.href="../../../app/login.html";
        return;
    }

    const campos = document.querySelectorAll("input");
    if((campos[0].value == '') && (campos[1].value == '') && (campos[2].value == '')) {
        $("input").each((index, element)=>{
            $(element).parent().css('border-color', 'red')
            $(element).parent().next("small").html("Campo obrigatório!");
            $(element).parent().next("small").css('visibility', 'visible')
        })
    } else {
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
        $(e.target).toggleClass('fa-eye');
        $(e.target).toggleClass('fa-eye-slash');
        
    }
    else {
        $(e.target).prev('input').attr('type', 'password');
        $(e.target).toggleClass('fa-eye');
        $(e.target).toggleClass('fa-eye-slash');
    }
})