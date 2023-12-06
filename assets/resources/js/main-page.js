window.addEventListener('load', function atualizarNumVaga() {
    const limite = Number(JSON.parse(this.localStorage.getItem('vaga')));
    this.document.querySelector("#numVagas").innerText = 100 - limite;
})