$("#cep").on('keyup', ()=> {
    if(document.querySelector("form").checkValidity()) {
        const cep = $("#cep").val();
        async function fetchMoviesJSON() {
            const response = await fetch('viacep.com.br/ws/' + cep + '/json/');
            console.log('a')
            const movies = await response.json();
            return movies;
          }
          
          fetchMoviesJSON().then(movies => {
            movies; // fetched movies
          });
    }
})