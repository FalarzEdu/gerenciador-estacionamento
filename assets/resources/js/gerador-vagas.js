window.addEventListener('load', ()=> {
    for (let i = 2; i <= 100; i++) {
        var vagaNova = document.querySelector("li").cloneNode(true);
        vagaNova.querySelector("p").innerText = i;
        vagaNova.id = "vaga-" + i;
        document.querySelector("ul").appendChild(vagaNova);
    }
})


window.addEventListener('load', ()=> {
    let div = '';
    for (let i = 1; i <= 100; i++) {
        div = document.createElement('div');
        div.classList.add('vaga');
        div.id = "vaga-" + i;
        document.querySelector('#vagas').appendChild(div);
    }
})