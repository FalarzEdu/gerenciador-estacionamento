/*-------------------------------------------------
################### MÁSCARA #########################
------------------------------------------------- */ 

$("#cep").mask('00000-000')

/*-------------------------------------------------
################# VALIDAÇÃO #######################
------------------------------------------------- */ 

$("input").on('keyup', ()=> {

  if(document.querySelector("form").checkValidity()) { 
    pegarCep();
  }
})

async function pegarCep() {
  const cep = $("#cep").val().replace(/-/g, "");
  const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`)
  const data = await response.json();
  if(!data.erro) {
    $("#estado").html(data.uf);
    $("#cidade").html(data.localidade);
    $("#rua").html(data.logradouro);
  } else {
    $("#cep").parent().css('border-color', 'red')
    $("#cep").parent().next("small").html("CEP inexistente!");
    $("#cep").parent().next("small").css('visibility', 'visible')
  }
}

/*-------------------------------------------------
################### SUBMIT #########################
------------------------------------------------- */ 

$("#submit").on('click', function validar(e) {
  e.preventDefault();

  if(!(document.querySelector("form").checkValidity())) {
    $("#cep").parent().css('border-color', 'red')
    $("#cep").parent().next("small").html("Campo obrigatório!");
    $("#cep").parent().next("small").css('visibility', 'visible')
  }
})