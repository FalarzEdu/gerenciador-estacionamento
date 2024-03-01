// window.addEventListener('load', ()=> {
//     const lembrar = JSON.parse(localStorage.getItem('lembrar'));
//     if(lembrar) {
//         const dados = JSON.parse(localStorage.getItem('usuario'));
//         $("#name").val(dados.nome);
//         $("#remember").prop('checked', true)
//         return
//     }
//     return
// })

// /*-------------------------------------------------
// ################### SUBMIT #########################
// -------------------------------------------------*/ 
// $("#submit").on('click', (e)=> {
//     e.preventDefault();

//     const dados = JSON.parse(localStorage.getItem('usuario'));
//     if(($("#name").val() == dados.nome) && ($("#password").val() == dados.senha)) {
//         window.location.href="./app/pages/principais/pagina-principal.html"
//     }
//     else {
//         $("#password").val('');
//         alert("Usuário inexistente!")
//     }

// })

// /*-------------------------------------------------
// ############## LEMBRAR USUÁRIO ####################
// ------------------------------------------------- */

// $("#remember").on('click', function lembrar() {
//     let lembrar = JSON.parse(localStorage.getItem('lembrar'));

//     if(lembrar == null) {
//         localStorage.setItem('lembrar', $("#remember").prop('checked'));
//         return
//     }
//     if(lembrar) localStorage.setItem('lembrar', false);
//     if(!lembrar) localStorage.setItem('lembrar', true);
// })

// /*-------------------------------------------------
// ################# VALIDAÇÃO #######################
// ------------------------------------------------- */

// $("input").on('keyup', (e)=> {
//     if(!(e.target.checkValidity())) {
//         if($(e.target).attr('id') == 'name') {
//             $(e.target).parent().next("small").html("Entrada inválida")
//         } else {
//             $(e.target).parent().next("small").html("Mínimo de 6 dígitos!")
//         }
//         $(e.target).parent().css("border-color", "red");
//         $(e.target).parent().next("small").css("visibility", "visible");
//     }
//     else {
//         $(e.target).parent().css("border-color", "#1A5B8D");
//         $(e.target).parent().next("small").css("visibility", "hidden");
//     }
// })

// /*-------------------------------------------------
// ############### REVELAR SENHA #####################
// ------------------------------------------------- */

// $(".fa-eye").on('click', (e)=> {
//     const state = $(e.target).prev('input').attr('type');
//     if(state == 'password') {
//         $(e.target).prev('input').attr('type', 'text');
//         $(e.target).toggleClass('fa-eye');
//         $(e.target).toggleClass('fa-eye-slash');
        
//     }
//     else {
//         $(e.target).prev('input').attr('type', 'password');
//         $(e.target).toggleClass('fa-eye');
//         $(e.target).toggleClass('fa-eye-slash');
//     }
// })
