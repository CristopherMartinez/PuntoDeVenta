<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tienda en línea</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<style>
    .slick-prev,
    .slick-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 1;
      background: transparent;
      border: none;
      outline: none;
      font-size: 2rem;
      cursor: pointer;
    }

    .slick-prev {
      left: 0;
    
    }

    .slick-next {
      right: 0;
     
    }

   .card {
  width: 18rem;
  margin: 1rem;
  height: 30rem; /* Definimos la altura de la tarjeta */
  display: flex; /* Hacemos que todas las tarjetas tengan la misma altura */
  flex-direction: column; /* Ajustamos la dirección del contenido */
}

.card-img-top {
  flex-grow: 1; /* Permitimos que la imagen crezca para llenar el espacio restante */
  object-fit: cover;
  max-height: 100%; /* Establecemos la altura máxima de la imagen al 100% */
}

    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 1rem;
    }

    th, td {
      text-align: left;
      padding: 8px;
      border: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .total {
      text-align: right;
    }

    /* new style for cart */
    .cart-container {
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  position: sticky;
  top: 0;
  background-color: white;
   z-index: 9999;
}

    .cart-container .cart-wrapper {
      width: 100%;
      margin-bottom: 1rem;
    }

    .cart-container .cart-wrapper h2 {
      margin-top: 0;
    }

    .cart-container .cart-wrapper .table {
      margin-bottom: 0;
    }

    .card-body {
      max-height: 30rem;
      overflow: hidden;
    }

  .add-to-cart {
    margin-top: 1rem; /* Agregamos un margen superior para separar los botones */
  }
  .total-label {
  text-align: right;
  font-weight: bold;
}

    @media (min-width: 768px) {
      .cart-container .cart-wrapper {
        width: 50%;
        margin-bottom: 0;
        padding-right: 1rem;
      }

      .cart-container .cart-wrapper:last-child {
        padding-right: 0;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2 class="text-center">Suspenso</h2>
        <div class="carousel">
          <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">ABC ¿Y la E?</h5>
              <p class="card-text">Juego donde la E se perdió y se tiene que buscar...</p>
              <p class="card-price">$15</p>
              <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>

            </div>
          </div>

          <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">mkmkkkmkk</h5>
              <p class="card-text">opmkmkmkmkmkkmk</p>
              <p class="card-price">$14</p>
              <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>

            </div>
          </div>

           <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">sdassdd</h5>
              <p class="card-text">vnkkkkkkkknk</p>
              <p class="card-price">$14</p>
              <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>

            </div>
          </div>

           <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">1234</h5>
              <p class="card-text">fgkmkmkmkmkmkmkmkmkmk</p>
              <p class="card-price">$14</p>
              <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>

            </div>
          </div>

           <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">1234</h5>
              <p class="card-text">kknkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkdknknknkckkkkkmmmmk</p>
              <p class="card-price">$14</p>
              <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>

            </div>
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <h2>Carrito</h2>
     <table class="table" id="cart-table">

          <thead>
            <tr>
              <th>Producto</th>
              <th>Precio</th>
              <th></th>
            </tr>
          </thead>
          <tbody class="cart-list">

          </tbody>
          <tfoot>
           <tr>
            <td>Total</td>
            <td class="cart-total">0</td>
            <td>
              <button class="btn btn-danger clear-cart">Vaciar</button>
            </td>
          </tr>
          </tfoot>
        </table>
<!-- 
        <table class="table" id="cart-table">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th></th>
            </tr>
          </thead>
          <tbody class="cart-list">

          </tbody>
          <tfoot>
          <tr>
            <td>Total</td>
            <td class="cart-total">0</td>
            <td>Cantidad</td>
            <td>
              <button class="btn btn-danger clear-cart">Vaciar</button>
            </td>
          </tr>
          </tfoot>
        </table> -->


      </div>
    </div>
<!-- 
    <div class="row">
      <div class="col-md-8">
        <h2 class="text-center">Puzzle</h2>
        <div class="carousel">
          <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title 3" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">xfxkmkmklslskdlsa</h5>
              <p class="card-text">delemkmrkvnrkdslofkwkwdwdadfdl</p>
              <p class="card-price">$10</p>
      <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>

            </div>
          </div>
           <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">5667</h5>
              <p class="card-text">djfjdkdkkkkkk</p>
              <p class="card-price">$14</p>
              <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>

            </div>
          </div>
           <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">7765</h5>
              <p class="card-text">logkdflsd</p>
              <p class="card-price">$14</p>
              <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>

            </div>
          </div>
           <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">456</h5>
              <p class="card-text">wwwfielsl</p>
              <p class="card-price">$14</p>
              <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>

            </div>
          </div>
           <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">jijijiji</h5>
              <p class="card-text">gggggggggkkkkmmmmk</p>
              <p class="card-price">$14</p>
              <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>

            </div>
          </div>

          <div class="card">
            <img src="https://via.placeholder.com/150" alt="Game Title" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">mkmkmkkmkmkmkmk</h5>
              <p class="card-text">Game dmijijeidjeindslmslmlsmlfmslmsldsldmslmsl</p>
              <p class="card-price">$11</p>
           <button class="btn btn-primary add-to-cart" data-title="Game Title" data-price="15">Agregar</button>

            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</body>

  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<<script>
// variable para el total del carrito
let cartTotal = 0;

$(document).ready(function(){
  $('.carousel').slick({
    dots: true,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});


// selecciona todos los botones "Agregar"
const addToCartButtons = document.querySelectorAll('.add-to-cart');

// agrega un escucha de eventos de clic a cada botón "Agregar"
addToCartButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    // obtén el título y el precio del producto del botón
    const title = this.parentNode.querySelector('.card-title').textContent;
    const price = parseInt(this.parentNode.querySelector('.card-price').textContent.substring(1));
    
    // agrega el producto a la tabla
    const cartList = document.querySelector('.cart-list');
    const cartItem = document.createElement('tr');
    cartItem.innerHTML = `
      <td>${title}</td>
      <td>$${price}</td>
      <td><button class="btn btn-danger remove-item">X</button></td>
    `;
    cartList.appendChild(cartItem);
    
    // actualiza el total del carrito
    cartTotal += price;
    const cartTotalElement = document.querySelector('td.cart-total');
    cartTotalElement.textContent = cartTotal;

    // selecciona todos los botones "X"
    const removeButtons = document.querySelectorAll('.remove-item');
    
    // agrega un escucha de eventos de clic a cada botón "X"
    removeButtons.forEach(function(removeButton) {
      removeButton.addEventListener('click', function() {
        // obtén el precio del producto del elemento anterior
        const price = parseInt(this.parentNode.previousElementSibling.textContent.substring(1));
        
        // elimina el producto de la tabla
        const cartItem = this.parentNode.parentNode;
        const cartList = cartItem.parentNode;
        cartList.removeChild(cartItem);
        
        // actualiza el total del carrito
        cartTotal -= price;
        const cartTotalElement = document.querySelector('td.cart-total');
        cartTotalElement.textContent = cartTotal;
      });
    });
  });
});

// selecciona el botón "Vaciar"
const clearCartButton = document.querySelector('.clear-cart');

// agrega un escucha de eventos de clic al botón "Vaciar"
clearCartButton.addEventListener('click', function() {
  // elimina todos los productos del carrito
  const cartList = document.querySelector('.cart-list');
  cartList.innerHTML = '';
  
  // actualiza el total del carrito
  cartTotal = 0;
  const cartTotalElement = document.querySelector('td.cart-total');
  cartTotalElement.textContent = cartTotal;
});

</script>