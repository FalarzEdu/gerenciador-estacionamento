window.addEventListener('load', function calcTempo() {
    const minuto = 1000 * 60;
    const hora = minuto * 60;
    const dia = hora * 24;

    const tempoAntigo = JSON.parse(sessionStorage.getItem('last'));
    sessionStorage.removeItem('last');
    const tempoAtual = new Date().getTime();
    let diferenca = tempoAtual - tempoAntigo;
    console.log(tempoAtual);
    console.log(tempoAntigo)
    console.log(diferenca)

    let result = Math.trunc(diferenca / dia);
    console.log(result)
    $("#dia").text(result);
    diferenca -= result * dia;

    result = Math.trunc(diferenca / hora);
    $("#hora").text(result);
    diferenca -= result * hora;
    
    result = Math.trunc(diferenca / minuto);
    $("#minuto").text(result);
})