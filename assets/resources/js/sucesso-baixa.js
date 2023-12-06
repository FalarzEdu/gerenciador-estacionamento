function calcTempo(placa) {
    const minuto = 1000 * 60;
    const hora = minuto * 60;
    const dia = hora * 24;


    const tempoAntigo = JSON.parse(localStorage.getItem(placa));
    const tempoAtual = new Date().getTime();
    const diferenca = tempoAtual - tempoAntigo;

    $("#dia").text(Math.trunc(diferenca));
    //$("#hora").text
}