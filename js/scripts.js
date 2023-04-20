//GAMES XBOX SCRIPTS -------------------------------------------------------------------------------------

    //Funcion para buscar con el input type search
   function buscar() {
    // Obtener los elementos de la página
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card');

    const searchTerm = searchInput.value.toLowerCase();

    // Recorrer todas las tarjetas y ocultar aquellas que no coincidan con el término de búsqueda
    cards.forEach(function(card) {
      const title = card.querySelector('.card-title').textContent.toLowerCase();
      const description = card.querySelector('.card-text:not([hidden])').textContent.toLowerCase();
      const matches = title.includes(searchTerm) || description.includes(searchTerm);
      card.style.display = matches ? 'block' : 'none';
    });

     // Mostrar o ocultar mensaje de no resultados
     const noResults = document.getElementById('noResults');
     if(searchTerm === '' || !foundMatch) {
         noResults.style.display = 'block';
     } else {
         noResults.style.display = 'none';
     }
 
  }

    //XBOX ONE SS-----------------------------------
    function searchXboxSS(categoria,consola) {
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card');
    const searchTerm = searchInput.value.toLowerCase();
    
    // Recorrer todas las tarjetas y ocultar aquellas que no coincidan con el término de búsqueda y con la categoría seleccionada
    let foundMatch = false;
    cards.forEach(function(card) {
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        // const description = card.querySelector('.card-text:not([hidden])').textContent.toLowerCase();
        const categoryTag = card.querySelector('.category-tag').textContent.toLowerCase();
        const consolaTag = card.querySelector('.consola-tag').textContent.toLowerCase();
        const matches = title.includes(searchTerm) && categoryTag.includes(categoria) &&consolaTag.includes(consola);
        card.style.display = matches ? 'block' : 'none';

        if(matches){
            foundMatch = true;
        }
    });

    // Mostrar o ocultar mensaje de no resultados
    const noResults = document.getElementById('noResults');
    if(!foundMatch) {
        noResults.style.display = 'block';
    } else {
        noResults.style.display = 'none';
    }
}

// //XBOX ONE X
function searchXboxX(categoria,consola) {
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card');
    const searchTerm = searchInput.value.toLowerCase();
    
    // Recorrer todas las tarjetas y ocultar aquellas que no coincidan con el término de búsqueda y con la categoría seleccionada
    let foundMatch = false;
    cards.forEach(function(card) {
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        // const description = card.querySelector('.card-text:not([hidden])').textContent.toLowerCase();
        const categoryTag = card.querySelector('.category-tag').textContent.toLowerCase();
        const consolaTag = card.querySelector('.consola-tag').textContent.toLowerCase();
        const matches = title.includes(searchTerm) && categoryTag.includes(categoria) &&consolaTag.includes(consola);
        card.style.display = matches ? 'block' : 'none';

        if(matches){
            foundMatch = true;
        }
    });

    // Mostrar mensaje de no resultados
    const noResults = document.getElementById('noResults');
    if(!foundMatch){
        noResults.style.display = 'block';
    } else {
        noResults.style.display = 'none';
    }

    
    // console.log(categoria);
    // console.log(consola);

}

//XBOX ONE S
function searchXboxS(categoria,consola) {
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card');
    const searchTerm = searchInput.value.toLowerCase();
    
    // Recorrer todas las tarjetas y ocultar aquellas que no coincidan con el término de búsqueda y con la categoría seleccionada
    let foundMatch = false;
    cards.forEach(function(card) {
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        // const description = card.querySelector('.card-text:not([hidden])').textContent.toLowerCase();
        const categoryTag = card.querySelector('.category-tag').textContent.toLowerCase();
        const consolaTag = card.querySelector('.consola-tag').textContent.toLowerCase();
        const matches = title.includes(searchTerm) && categoryTag.includes(categoria) &&consolaTag.includes(consola);
        card.style.display = matches ? 'block' : 'none';

        if(matches){
            foundMatch = true;
        }
    });

    // Mostrar mensaje de no resultados
    const noResults = document.getElementById('noResults');
    if(!foundMatch){
        noResults.style.display = 'block';
    } else {
        noResults.style.display = 'none';
    }
}

//-------------------------------------------------------------------------------------


//LOGIN--------------------------------------------------------------------------

        function verContraseniaLogin(){
            const verContraseniaBtn = document.getElementById('ver-contrasenia');
            const contraseniaInput = document.getElementById('contrasenia');

            if (contraseniaInput.getAttribute('type') === 'password') {
                contraseniaInput.setAttribute('type', 'text');
                verContraseniaBtn.innerHTML = '<span class="material-symbols-outlined">visibility</span>';
            } else {
                contraseniaInput.setAttribute('type', 'password');
                verContraseniaBtn.innerHTML = '<span class="material-symbols-outlined">visibility_off</span>';
            }
        }

        function validarRecaptcha() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                // El usuario no ha completado el reCAPTCHA
                Swal.fire({
                text: 'Porfavor verifíca el Recaptcha',        
                })
                return false;
            } else {
                // El usuario ha completado el reCAPTCHA
                return true;
            }
            }
        
//--------------------------------------------------------------------------

//SingUp--------------------------------------------------------------------












//----------------------------------------------------------------------------


//Lista de deseos-----------------------------------------------------------
//Obtenemos todos los elementos del html con la clase .btnAddDeseo 
const btnAddDeseo = document.querySelectorAll('.btnAddDeseo');
//Cantidad de deseos
const btnDeseo = document.querySelector('#btnCantidadDeseo');
//Lista vacia de Deseos
let listaDeseo;

document.addEventListener('DOMContentLoaded',function(){
    if(localStorage.getItem('listaDeseo') != null){
        listaDeseo = JSON.parse(localStorage.getItem('listaDeseo'));
    }    
    cantidadDeseo();
    for (let i = 0; i < btnAddDeseo.length; i++) {
              //Agregamos por cada vuelta un evento click y obtenemos el id del producto 
            //Pasamos el id del producto a la funcion agregarDeseo
            btnAddDeseo[i].addEventListener('click',function(){
            let idProducto = btnAddDeseo[i].getAttribute('prod');
            agregarDeseo(idProducto);
        })
        
    }
})

//Funcion en que pasamos como parametro el id del producto que ya hemos recuperado
function agregarDeseo(idProducto){

    if(localStorage.getItem('listaDeseo') == null){
        listaDeseo = [];
    }else{
        let listaExiste = JSON.parse(localStorage.getItem('listaDeseo'));
        for (let i = 0; i < listaExiste.length; i++) {
            // const element = array[index];
            if(listaExiste[i]['idProducto'] == idProducto){
                //Mostramos el mensaje de que el producto ya ha favoritos
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Producto ya agregado a favoritos',
                    showConfirmButton: false,
                    timer: 1500
                  })
                  return;
            }
        }
        listaDeseo.concat(localStorage.getItem('listaDeseo'));
    }

    listaDeseo.push({
        "idProducto" : idProducto,
        "cantidad" : 1
    });
    //Agregamos a localStorage
    localStorage.setItem('listaDeseo',JSON.stringify(listaDeseo));
    //Mostramos alerta
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Producto agregado a favoritos',
        showConfirmButton: false,
        timer: 1500
      })
    cantidadDeseo();
}

function cantidadDeseo(){
    //Recuperamos
    let listas = JSON.parse(localStorage.getItem('listaDeseo'));
    //Si no hay deseos seguir mostrando 0 en cantidad
    if(listas != null){
        btnDeseo.textContent = listas.length;
    }else{
        btnDeseo.textContent = 0;
    }
    
    
}

 //app/Controllers/usuario/ShoppingCarController.php
 //  $.post('../../js/recibirDatos.php', { datos: listaDeseo }, function(response) {
//     // console.log(response);
//     alert(response);

// });

// function mostrarDeseos(){
//     // Obtenemos el valor de localStorage
//     let listaDeseo = localStorage.getItem('listaDeseo');
    
//     // Hacemos la petición POST a recibirDatos.php y pasamos el valor de listaDeseo como parámetro "datos"
//     $.post('../../js/recibirDatos.php', { datos: listaDeseo }, function(response) {
//         alert(response);
//     });
// }

 function mostrarDeseos(){
    // // Obtenemos el valor de localStorage
    // let listaDeseo = localStorage.getItem('listaDeseo');
    
    // // Hacemos la petición POST a recibirDatos.php y pasamos el valor de listaDeseo como parámetro "datos"
    // $.post('../../js/recibirDatos.php', { datos: listaDeseo }, function(response) {
    //     alert(response);
    // });

    // let listaDeseo = localStorage.getItem('listaDeseo');
    // document.querySelector('#miDiv').innerHTML = listaDeseo;


//     let listaDeseo = localStorage.getItem('listaDeseo');
// let objetosDeseo = JSON.parse(listaDeseo);

// objetosDeseo.forEach(function(objeto) {
//   let div = document.createElement('div');
//   div.innerHTML = `Nombre: ${objeto.nombre}, Precio: ${objeto.precio}`;
//   document.querySelector('#miDiv').appendChild(div);
// });

var listaDeseo = localStorage.getItem('listaDeseo');

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // La respuesta del servidor ha sido recibida correctamente
    }
  };
  xhttp.open("POST", "../../js/recibirDatos.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("nombre=" + listaDeseo);

}

// $('#boton1').click(function(){
//     $.post('../../js/recibirDatos.php',{
//         nombre: 'Cristopher',
//         ciudad: 'Merida',
//         edad: '22',
//         telefono:'4421163766',
//         function(datos,estado){
//             alert("Informacion: "+ datos + "\nestado: " + estado)
//         }
//     })
// })




// //Tabla de deseos en pagina listaDeseos
// //Recuperamos la tabla con el selector
// const tableLista = document.querySelector('tableListaDeseos tbody');
// //Verificamos que se haya cargado correctamente el documento
// document.addEventListener('DOMContentLoaded',function(){
//     // mostrarDeseos();
   
// })


//   function getListaDeseo() {
//     // // la url donde estará el método
//     const url = base_url ;
//     const http = new XMLHttpRequest();
//     http.open('POST', url, true);
//     http.send(JSON.stringify(listaDeseo));

//     http.onreadystatechange = function (){
//         if(this.readyState == 4 && this.status == 200){
//             console.log(this.responseText);
//         }
//     }
//     console.log(url);
// }

// function getListaDeseo() {
//     let listaDeseo = JSON.parse(localStorage.getItem('listaDeseo'));
  
//     // const url = "<?php echo base_url() ?>/app/Controllers/usuario/ShoppingCarController/guardarDatos";
//     const options = {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify({ listaDeseo: listaDeseo })
//     };
//     fetch(base_url, options)
//         .then(response => response.json())
//         .then(data => console.log(data))
//         .catch(error => console.error(error));
//   }
  







  
//----------------------------------------------------------------------------

