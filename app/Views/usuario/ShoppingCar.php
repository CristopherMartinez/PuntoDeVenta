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
    font-size: 1rem;
    cursor: pointer;
   
}
.slick-prev:before,
.slick-next:before {
    font-family: 'slick';
    font-size: 30px;
    line-height: 1;
    opacity: .75;
    color: black;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-prev:before {
    content: '←';
}
.slick-next:before {
    content: '→';
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
    .cart-action {
  vertical-align: middle;
  margin: 5px;
}
  .add-to-cart {
    margin-top: 0rem; /* Agregamos un margen superior para separar los botones */
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
    .card-img-top {
        width: 100%;
        max-width: 200px;
        height: auto;
        max-height: 200px;
    }
  </style>
</head>
<body class="backgrounFooter">
  <div class="container">
    <div class="row">
      <div class="col-md-7">

        <h2 class="text-center" style="color: whitesmoke;">Accion</h2>

        <div class="carousel">
          

          <?php foreach ($videojuegos as $juego) { ?>
            <div class="card" >
            <a type="button" class="btnAddDeseo" prod="<?php echo $juego['idVideojuego'] ?>">
                        <span class="material-symbols-outlined" style="color: red; padding-left:85%; padding-bottom :10px;">
                        favorite
                        </span>
                        </a>
            <img src="<?php echo base_url()?>/imagenes/<?php echo $juego['imagen']?>" alt="Game Title" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?= $juego['nombre']?></h5>
                <!-- <p class="card-text" style="font-size:10px;"><?= substr($juego['descripcion'], 0, 50) ?></p> -->
                <p class="card-price">$<?= $juego['precio']?></p>
                <button class="btn btn-primary add-to-cart" data-title="Game Title " data-price="15">Agregar</button>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>

      <div class="col-md-5">
  <h2 style="color: whitesmoke;">Carrito</h2>
  <table class="table" id="cart-table" style="color: whitesmoke;">
    <thead>
      <tr>
        <th scope="col">Producto</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Acción</th>
        <th scope="col">Total</th>
      </tr>
    </thead>
    <tbody class="cart-list"></tbody>
    <tfoot>
      <tr id="footer">
        <td colspan="4">Tu carrito está vacío</td>
      </tr>
      <tr class="cart-total-row">
        <td >Total productos</td>
        <td id="cart-quantity-total">0</td>
        <td><button id="vaciar-carrito">Vaciar carrito</button></td>
        <td class="cart-total">0.00</td>
      </tr>
    </tfoot>
  </table>   
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
<script>
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
// variable para el total del carrito
let cartTotal = 0;
// variable para almacenar los productos del carrito
const cartItems = {};
// variable para el total de productos en el carrito
let cartQuantityTotal = 0;
// función para mostrar u ocultar el mensaje "Carrito vacío"
function toggleCartMessage() {
  const footer = $('#footer');
  const cartList = $('.cart-list');
  if (Object.keys(cartItems).length === 0) {
    footer.show();
    cartList.hide();
  } else {
    footer.hide();
    cartList.show();
  }
  toggleCartTotal(); // mostrar u ocultar la fila correspondiente al total de productos
}
// función para mostrar u ocultar la fila correspondiente al total de productos
function toggleCartTotal() {
  const cartTotalRow = $('.cart-total-row');
  if (Object.keys(cartItems).length === 0) {
    cartTotalRow.hide();
  } else {
    cartTotalRow.show();
  }
}
$(document).ready(function(){
  toggleCartMessage(); // ocultar el mensaje "Tu carrito está vacío" si ya hay productos en el carrito
  // agrega un escucha de eventos de clic a cada botón "Agregar"
  $('.add-to-cart').on('click', function() {
    const title = this.parentNode.querySelector('.card-title').textContent;
    const price = parseInt(this.parentNode.querySelector('.card-price').textContent.substring(1));
    // verificar si ya existe un producto con el mismo título en el carrito
    if (cartItems[title]) {
      // aumentar la cantidad del producto en 1 y actualizar el precio total
      cartItems[title].quantity += 1;
      cartItems[title].totalPrice += price;
      // actualizar la fila correspondiente en la tabla de carrito
      const row = $(`#cart-row-${title}`);
      row.find('.cart-quantity').text(cartItems[title].quantity);
      row.find('.cart-price-total').text(cartItems[title].totalPrice.toFixed(2));
    } else {
      // agregar una nueva fila a la tabla de carrito con el producto
      const newRow = `
        <tr id="cart-row-${title}">
          <td class="cart-title">${title}</td>
          <td class="cart-quantity">1</td>
          <td class="cart-action" style="width: 120px;">
            <button class="btn btn-sm btn-danger remove-from-cart" data-title="${title}" data-price="${price}">-</button>
            <button class="btn btn-sm btn-success add-to-cart" data-title="${title}" data-price="${price}">+</button>
          </td> 
          <td class="cart-price-total">${price.toFixed(2)}</td>
        
        </tr>
      `;
      $('.cart-list').append(newRow);
      // agregar el producto al carrito
      cartItems[title] = {
        quantity: 1,
        totalPrice: price
      };
    }
    // actualizar el valor del total de productos en el carrito
cartQuantityTotal = 0;
for (const title in cartItems) {
  cartQuantityTotal += cartItems[title].quantity;
}
// actualizar el valor en la tabla
$('#cart-quantity-total').text(cartQuantityTotal);
    // actualizar el total del carrito
    cartTotal += price;
    $('.cart-total').text(cartTotal.toFixed(2));
    toggleCartMessage(); // actualizar el mensaje "Tu carrito está vacío"
  });
  // evento click del botón "-"
  $(document).on('click', '.remove-from-cart', function(){
  // obtener el título y el precio del producto a quitar
  const title = $(this).data('title');
  const price = parseFloat($(this).data('price'));
  // disminuir la cantidad del producto en 1 y actualizar el precio total
  cartItems[title].quantity -= 1;
  cartItems[title].totalPrice -= price;
  if (cartItems[title].quantity === 0) {
    $(`#cart-row-${title}`).remove();
    delete cartItems[title];
  } else {
    // actualizar la fila correspondiente en la tabla de carrito
    const row = $(`#cart-row-${title}`);
    row.find('.cart-quantity').text(cartItems[title].quantity);
    row.find('.cart-price-total').text(cartItems[title].totalPrice.toFixed(2));
  }
  cartQuantityTotal = 0;
for (const title in cartItems) {
  cartQuantityTotal += cartItems[title].quantity;
}
// actualizar el valor en la tabla
$('#cart-quantity-total').text(cartQuantityTotal);
  // actualizar el total del carrito
  cartTotal -= price;
  $('.cart-total').text(cartTotal.toFixed(2));
  toggleCartMessage(); // actualizar el mensaje "Tu carrito está vacío"
});
// evento click del botón "+"
$(document).on('click', '.add-to-cart', function(){
  // obtener el título y el precio del producto a agregar
  const title = $(this).data('title');
  const price = parseFloat($(this).data('price'));
  // aumentar la cantidad del producto en 1 y actualizar el precio total
  cartItems[title].quantity += 1;
  cartItems[title].totalPrice += price;
  // actualizar la fila correspondiente en la tabla de carrito
  const row = $(`#cart-row-${title}`);
  row.find('.cart-quantity').text(cartItems[title].quantity);
  row.find('.cart-price-total').text(cartItems[title].totalPrice.toFixed(2));
  cartQuantityTotal = 0;
for (const title in cartItems) {
  cartQuantityTotal += cartItems[title].quantity;
}
// actualizar el valor en la tabla
$('#cart-quantity-total').text(cartQuantityTotal);
  // actualizar el total del carrito
  cartTotal += price;
  $('.cart-total').text(cartTotal.toFixed(2));
});
});

$('#vaciar-carrito').on('click', function() {
  // eliminar todas las filas de la tabla de carrito
  $('.cart-list').empty();
  // restablecer el total del carrito y la cantidad total de productos
  cartTotal = 0;
  cartQuantityTotal = 0;
  cartItems = {};
  // actualizar la tabla y el mensaje "Tu carrito está vacío"
  toggleCartMessage();
  // actualizar el valor del total de productos en la tabla
  $('#cart-quantity-total').text(cartQuantityTotal);
  // actualizar el valor del total del carrito en la tabla
  $('.cart-total').text(cartTotal.toFixed(2));
});

// console.log(cartQuantityTotal);
</script>
<script src=" <?php echo base_url()?>/js/scripts.js"></script>