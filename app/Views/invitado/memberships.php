    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
        <script src="https://kit.fontawesome.com/9efa70fc0a.js" crossorigin="anonymous"></script>   
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

<?php
    $opiniones = array(
        array(
            "titulo" => "Excelente pagina",
            "descripcion" => "La variedad de juegos disponibles en esta página es impresionante. Me encanta que siempre están actualizando su catálogo con las últimas novedades. Además, el proceso de compra es muy fácil y la atención al cliente es excelente. Recomendado al 100%.",
            "usuario" => "Daniel2343"
        ),
        array(
            "titulo" => "Mucha calidad",
            "descripcion" => "Desde que descubrí esta página, se ha convertido en mi lugar de referencia para comprar juegos en línea. Los precios son muy competitivos y la compra es siempre rápida y confiable. Además, me encanta la interfaz de usuario.",
            "usuario" => "Miguel3043"
        ),
        array(
            "titulo" => "Excelente presentación",
            "descripcion" => "Esta página es perfecta para los gamers que buscan una experiencia de compra rápida y segura. La variedad de juegos es impresionante y siempre hay ofertas interesantes. Además, el proceso de compra es muy sencillo.",
            "usuario" => "Rodrigo8034"
        )
    );
?>

<div class="container">

    <?php $count = 0; ?>
    <?php foreach ($opiniones as $opinion) { ?>
        <?php if ($count % 3 == 0) { ?>
            <div class="row">
        <?php } ?>
        
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card mb-4">
                <div class="card-body" style="color:black;">
                    <h4 class="card-title"><?= $opinion['titulo']?></h4>
                    <p class="card-text"  style="font-size: 11px;"><?= $opinion['descripcion']?></p>
                    <p class="card-text" style="font-size: 18px;"><small class="text-muted">Usuario :<?= $opinion['usuario']?></small></p>
                    <div style="color:#426cf5;">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    
                </div>
            </div>
        </div>

        <?php $count++; ?>
        <?php if ($count % 3 == 0) { ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if ($count % 3 != 0) { ?>
        </div>
    <?php } ?>

</div>



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
