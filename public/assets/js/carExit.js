
// Plate validation ################################
$("#licensePlate").on('keyup', () => {
    // Retrieve the plate HTML value
    const placa = $("#licensePlate").val();
    if(placa.length == 7) {
        // Var to store backend requested results
        let carData;
        // Fetch to request data from the backend
        const verifyPlate = async () => {
            // Parameters and options to be sent along with the HTTP request
            let param = {
                "type": "plateSearch",
                "param": placa
            };
            let options = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(param)
            };
            try {
                // Awaits for the promise to be solved before continues
                const response = await fetch("../controllers/carExitProccess.php", options)
                // Transforms data received into JSON
                const data = await response.json();
                if(!response.ok) {
                    throw new Error("Couldn't resolve HTTP request.");
                }
                else {
                    carData = data;
                    // Changes the HTML with the received data
                    console.log(carData);
                    $("#model").html(carData[0]);
                    $("#color").addClass("bg-" + carData[1]);
                }
            }
            catch(error) {
                console.error("error:", error);
            }
        }
        verifyPlate();
    }
})

// /* ----------------------------------------------------
// #################### VALIDAÇÃO FORM ###################
// ---------------------------------------------------- */

// $("#submit").on('click', function validarCampos(e) {
//     e.preventDefault()
//     const form = document.querySelector("form");
//     if(form.checkValidity()) {

//         const vaga = Number(JSON.parse(localStorage.getItem('vaga')));
//         if(vaga > 0) localStorage.setItem('vaga', vaga - 1);
    
//         const placa = $("#placa").val();
//         const obj = JSON.parse(localStorage.getItem(placa));
//         const hora = obj.hora;
//         sessionStorage.setItem('last', JSON.stringify(hora));
//         localStorage.removeItem(placa);
//         window.location.href="../paginas-sucesso/sucesso-baixa.html";
//     }
//     else {
//         $("#blur").css('display', 'block');
//         $("#popup").children("h2").text("Preencha os campos corretamente!");
//         $("#popup").css('display', 'flex');
//     }
// })

// /* ----------------------------------------------------
// ##################### FECHA O POPUP ####################
// ---------------------------------------------------- */

// function fechar() {
//     $("#blur").css('display', 'none');
//     $("#popup").css('display', 'none');
// }