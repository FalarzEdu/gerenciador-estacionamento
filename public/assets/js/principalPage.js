window.addEventListener('load', function atualizarNumVaga() {

      // Var to store backend requested results
      let spots;
      // Fetch to request data from the backend
      const requestSpots = async () => {
          // Parameters and options to be sent along with the HTTP request
          let options = {
              method: "POST",
              headers: {
                  "Content-Type": "application/json"
              },
          };
          try {
              // Awaits for the promise to be solved before continues
              const response = await fetch("../controllers/principalPageProccess.php", options)
              // Transforms data received into JSON
              const data = await response.json();
              if(!response.ok) {
                  throw new Error("Couldn't resolve HTTP request.");
              }
              else {
                  spots = data;
                  // for($i; $i < 100; $i++) {
                  //   const newElement = document.createElement("div");
                  // }
              }

              // <div class="flex justify-center items-center w-full h-[10vh] rounded-sm text-white"></div>
          }
          catch(error) {
              console.error("error:", error);
          }
      }
      requestSpots();
})

window.addEventListener('load', function gerarGrafico() {

  const ctx = document.getElementById('donut');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
        label: 'Spots',
        data: [60, 100],
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

