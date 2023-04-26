    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
    </head> 
    <div class="pricing-wrapper clearfix" style="margin-bottom: 30px;">

    <div class="pricing-table">
    <h3 class="pricing-title">Premium</h3>
    <div class="price">$60<sup>/ mes</sup></div>
    <ul class="table-list">
        <li>Temporadas <span>de videojuegos</span></li>
        <li>Acceso Ilimitado <span>por 3 meses</span></li>
        <li>Gratis 3 <span>videojuegos</span></li>
        <li>15 días <span> de demos espciales</span></li>
        <li>6 Meses <span>de acceso a juegos online</span></li>
    </ul>
    <div class="table-buy">
        <button class="btn btn-primary" onclick="mostrarMensaje()">Comprar</button>
    </div>
    </div>

    <div class="pricing-table gold">
    <h3 class="pricing-title">Gold</h3>
    <div class="price">$100<sup>/ mes</sup></div>
    <ul class="table-list">
        <li>Acceso Ilimitado <span>por 12 meses</span></li>
        <li>Gratis 10 <span>videojuegos</span></li>
        <li>1 Meses <span>de demos especiales</span></li>
        <li>6 Meses <span> de acceso a juegos online</span></li>
        <li>Acceso a preventa especial</li>
    </ul>
    <div class="table-buy">
        <button class="btn btn-primary" onclick="mostrarMensaje()">Comprar</button>
    </div>
    </div>

    <div class="pricing-table diamond">
    <h3 class="pricing-title">Diamond</h3>
    <div class="price">$200<sup>/ mes</sup></div>
    <ul class="table-list">
        <li>Acceso Ilimitado <span>por 15 meses</span></li>
        <li>Gratis 15 <span>videojuegos</span></li>
        <li>12 meses<span> de acceso a juegos online</span></li>
        <li>Soporte <span> personalizado</span></li>
        <li>Acceso a preventa especial</li>
    </ul>
    <div class="table-buy">
        <button class="btn btn-primary" onclick="mostrarMensaje()">Comprar</button>
    </div>
    </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
<script>
    function mostrarMensaje(){
        Swal.fire({  
        icon: 'info',
        title: '¿Aun no estas registrado?',
        showConfirmButton:true,
        // html: '<button class="btn btn-primary">Registrate</button>'
        confirmButtonText: '<a href="SingUp" style="text-decoration:none; color:#454746; font-weight:700;">Registrate</a>',
        })   
    }
</script>
