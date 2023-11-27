window.addEventListener('load', ()=> {
    for (let i = 2; i <= 100; i++) {
        var vagaNova = document.querySelector("li").cloneNode(true);
        vagaNova.querySelector("p").innerText = i;
        vagaNova.id = "vaga-" + i;
        document.querySelector("ul").appendChild(vagaNova);
    }
})
