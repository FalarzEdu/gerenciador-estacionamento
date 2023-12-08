window.addEventListener('load', function atualizarNumVaga() {
    const limite = Number(JSON.parse(this.localStorage.getItem('vaga')));
    this.document.querySelector("#numVagas").innerText = 100 - limite;
})

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
})

window.addEventListener('load', function gerarGrafico() {

  const data = JSON.parse(this.localStorage.getItem('vaga'));

  const ctx = document.getElementById('donut');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
        label: 'Vagas',
        data: [100 - data, data],
        borderWidth: 2,
        backgroundColor: [
          '#22A62E',
          '#D80032'
        ]
      }]
    },
    options: {
    }
  });
})

