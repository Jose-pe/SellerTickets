let tipodeentrada = document.getElementById('tipodeentrada');
let cantidadestandartickets = document.getElementById('cantidadestandartickets');
let totalapagarestandar = document.getElementById('totalapagarestandar');
let iduser = document.getElementById('iduser');
let precioestandar = 100;
let pagar = document.getElementById('pagar');


cantidadestandartickets.addEventListener('change', calcularprecioestandar);
pagar.addEventListener('click', function(){
    registrarcompra();
    if (cantidadestandartickets.value == 1) {
        
       }
    if (cantidadestandartickets.value == 2) {
        window.location.href = "https://drive.google.com/file/d/173ElsVsbnUb9kq8uiP9spVKAy0Y7Q98a/view?usp=sharing";
       }
   if (cantidadestandartickets.value == 3) {
    window.location.href = "https://drive.google.com/file/d/1BnEmILtrQ0Xl4QKJ2LxWSZEYYOt9HSz8/view?usp=sharing";
   }
   if (cantidadestandartickets.value == 4) {
    window.location.href = "https://drive.google.com/file/d/1M67o5VJ8HqYb_xZWBv_UXYwe4kshlDBY/view?usp=sharing";
   }
   if (cantidadestandartickets.value == 5) {
    window.location.href = "https://drive.google.com/file/d/13QFbv4WrgqDMBJ60cK3cS2P6Z6zae3QS/view?usp=sharing";
   }
});

function calcularprecioestandar(){
    let preciofinal = 0;
     preciofinal = precioestandar * cantidadestandartickets.value;
     //console.log("aqui es " + preciofinal);
     totalapagarestandar.textContent= preciofinal;
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
                cantidad: cantidadestandartickets.value,
                total: totalapagarestandar.textContent,
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