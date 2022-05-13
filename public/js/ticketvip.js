let tipodeentrada = document.getElementById('tipodeentrada');
let cantidadviptickets = document.getElementById('cantidadviptickets');
let totalapagar = document.getElementById('totalapagar'); 
let pagar = document.getElementById('pagar');
let preciovip = 120; 


cantidadviptickets.addEventListener('change', calcularpreciovip);

pagar.addEventListener('click', function(){

      registrarcompra();

});

function calcularpreciovip(){
let preciofinal = 0;
 preciofinal = preciovip * cantidadviptickets.value;
  totalapagar.textContent= preciofinal;
}

function registrarcompra(){
  let token = document
  .querySelector('meta[name="csrf-token"]')
  .getAttribute("content");

  fetch("registrarcompra", {
      headers: {
          "Content-Type": "application/json",
          Accept: "application/json, text-plain, */*",
          "X-Requested-Whith": "XMLHttpRequest",
          "X-CSRF-TOKEN": token,
      },
      method: "post",
      credentials: "same-origin",
      body: JSON.stringify({
  
          tipoticket : tipodeentrada.textContent,
          cantidad: cantidadviptickets.value,
          total: totalapagar.textContent,
          iduser: iduser.textContent,
          estado: "Pendiente",
          
      }),
  })
      .then((data) => {
          
         
      })
      .catch(function (error) {
          console.log(error);
      });

}