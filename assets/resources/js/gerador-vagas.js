window.addEventListener('load', function gerarVagas() {
    var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)

    if(width > 1024) {
        let div = '';
        const limite = Number(JSON.parse(this.localStorage.getItem('vaga')));
        for (let i = 1; i <= limite; i++) {
            div = document.createElement('div');
            div.classList.add('vagaPreenchida');
            div.id = "vaga-" + i;
            document.querySelector('#vagas').appendChild(div);
        }
        div = '';
        for (let i = limite + 1; i <= 100; i++) {
            div = document.createElement('div');
            div.classList.add('vaga');
            div.id = "vaga-" + i;
            document.querySelector('#vagas').appendChild(div);
        }
    }
    else {
        const limite = Number(JSON.parse(this.localStorage.getItem('vaga')));
        for (let i = 1; i <= limite; i++) {
            var vagaNova = document.querySelector("#vaga-0").cloneNode(true);
            vagaNova.querySelector("p").innerText = i;
            vagaNova.style.display = 'flex';
            vagaNova.children[1].style.backgroundColor = '#D80032'
            vagaNova.id = "vaga-" + i;
            document.querySelector("ul").appendChild(vagaNova);
        }
        for (let i = limite + 1; i <= 100; i++) {
            var vagaNova = document.querySelector("#vaga-0").cloneNode(true);
            vagaNova.querySelector("p").innerText = i;
            vagaNova.style.display = 'flex';
            vagaNova.id = "vaga-" + i;
            document.querySelector("ul").appendChild(vagaNova);
        }
    }
})