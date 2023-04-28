<head>
    <style>
        /* .list:hover{
        background-color:#c3c3c3;
        list-style:none;
        padding-left: 10px;
        cursor: hand;
        } */
        .backgroundGamesPlay{
            background-image: url("<?php  echo base_url()?>/imagenes/fondoPlay8.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
        /*Los demas estilos estan en ../styles/styles.css*/ 
    </style>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/styles/styles.cs">
        <script src=" <?php echo base_url()?>/js/scripts.js"></script>
</head>

<body class="backgrounFooter">
<div >
    <div class="container " style="padding-top: 30px; padding-bottom:30px;">
    <div class="row" style="background-color: #a2aab8;">
        <div class="col-xl-3 col-sm-12" style="background-color:transparent;">
            <div class="row">
                <br>
                <div class="col-xl-12" style="background-color: transparent; margin-top:30px;">
                    <form class="d-flex">
                        <!-- <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" id="searchInput">
                        <button class="btn btn-outline-success" type="submit" style="padding-left: 5px;" onclick="buscar()">Buscar</button> -->
                        <input  type="search" id="searchInput" aria-label="Search"  class="form-control" placeholder="Buscar">
                        <button class="btn btn-outline-success" type="button" style="margin-left: 10px;" onclick="buscar()">Buscar</button>
                    </form>

                        <!--PlayStation 3-->
                        <div class="input-group mb-3 dropdown animate__animated animate__fadeInDown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php foreach ($listaVideojuegos as $juego) { ?>
                                    <label><?php echo $juego->identificador ?> (<?php echo $juego->valor ?>)</label>
                                <?php } ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php foreach ($listaVideojuegos as $videojuego) { ?>
                                    <?php foreach ($totalGAventuraPlayStation3 as $categoria) { ?>
                                        <li>
                                            <a class="dropdown-item" href="#" onclick="searchPlayStation3(<?php echo $categoria->idCategoria;?>,<?php echo $videojuego->idConsola;?>)" data-value="<?php echo $categoria->identificador; ?>">
                                                <?php echo $categoria->identificador . ' (' . $categoria->valor . ')'; ?>
                                            </a>
                                           
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>

                        <!--PlayStation 4-->
                        <div class="input-group mb-3 dropdown animate__animated animate__fadeInDown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php foreach ($PlayStation4 as $juego) { ?>
                                    <label><?php echo $juego->identificador ?> (<?php echo $juego->valor ?>)</label>
                                <?php } ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php foreach ($PlayStation4 as $videojuego) { ?>
                                    <?php foreach ($CantGeneroPlayStation4 as $categoria) { ?>
                                        <li><a class="dropdown-item" href="#" onclick="searchPlayStation4(<?php echo $categoria->idCategoria;?>,<?php echo $videojuego->idConsola;?>)"  data-value="<?php echo $categoria->identificador ?>"><?php echo $categoria->identificador . ' (' . $categoria->valor . ')' ?></a></li>
                                      
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                        <!--PlayStation 5-->
                        <div class="input-group mb-3 dropdown animate__animated animate__fadeInDown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php foreach ($PlayStation5 as $juego) { ?>
                                    <label><?php echo $juego->identificador ?> (<?php echo $juego->valor ?>)</label>
                                <?php } ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php foreach ($PlayStation5 as $videojuego) { ?>
                                    <?php foreach ($CantGeneroPlayStation5 as $categoria) { ?>
                                        <li><a class="dropdown-item" href="#" onclick="searchPlayStation5(<?php echo $categoria->idCategoria;?>,<?php echo $videojuego->idConsola;?>)" data-value="<?php echo $categoria->identificador ?>"><?php echo $categoria->identificador . ' (' . $categoria->valor . ')' ?></a></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>

                </div>
            </div>
        </div>

        <div class="col-xl-9 col-sm-12"  style="background-color: transparent; ">
            <div class="row">
                <?php foreach ($videojuegosPlayStation as $juego) { ?>
                    <div class="col-12" style="margin-top: 10px;">
                        <div class="card mb-3 backgroundGamesPlay" style="max-width: auto; border-radius:5px;">
                            <div class="row g-0">
                                <div class="col-md-4 align-self-center">
                                    <img src="<?php echo base_url()?>/imagenes/<?php echo $juego['imagen']?>" class="img-fluid rounded-start" style="border-radius: 5px;" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body" id="cards-container">
                                        <h3 class="card-title" style="color:whitesmoke;"><?php echo $juego['nombre'] ?></h3>
                                        <h5 class="card-text"  style="color:whitesmoke;"><?php echo $juego['nombreConsola'] ?></h5>
                                        <!--Id del videojuego (no borrar)-->
                                        <p class="card-text"  style="color:whitesmoke;" hidden><?php echo $juego['idVideojuego'] ?></p>
                                        <p class="card-text"  style="color:whitesmoke;"><?php echo $juego['descripcion'] ?></p>
                                         <!--Campos ocultos (no borrar)-->
                                        <p class="category-tag" style="color:whitesmoke;" hidden>ID Categoria : <?php echo $juego['idCategoria'] ?></p>
                                        <p class="consola-tag" style="color:whitesmoke;" hidden>ID Consola : <?php echo $juego['idConsola'] ?></p>
                                        
                                        <!-- <p style="color:whitesmoke;">  <?php print_r($videojuegosPlayStation)?></p>
                                       -->

                                        <p class="card-text">

                                            <span class="col-12 col-sm-12 col-xl-4"><button type="button" class="btn btn-outline-primary" disabled style="color:whitesmoke; border-color:whitesmoke; margin-top:10px; font-weight:bolder;">Precio: $<?php echo $juego['precio'] ?></button></span>
                                            <!-- <span class="col-6 col-sm-6 col-xl-4"><button type="button" class="btn btn-outline-primary" style="margin-top:10px; margin-left:5px; font-weight:bolder;">Comprar</button></span> -->
                                            <span class="col-6 col-sm-6 col-xl-4" style="padding-left: 5px;"><button type="button" class="btn btn-success" style="margin-top:10px; font-weight:bolder;">Agregar al carrito</button></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div id="noResults" style="display:none;">No se encontraron resultados de la busqueda.</div>
            </div>
        </div>


        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>
    
</div>
</body>

<script>
     //PlayStation-------------------------------------
    //Para detectar cuando se esta escribiendo y coincida lo que se pone en el input con la etiqueta .card-title
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card');
    const noResults = document.getElementById('noResults');

    searchInput.addEventListener('input', function(event) {
        const searchTerm = event.target.value.toLowerCase();
        let foundMatch = false;

        cards.forEach(function(card) {
            const title = card.querySelector('.card-title').textContent.toLowerCase();
            const description = card.querySelector('.card-text:not([hidden])').textContent.toLowerCase();
            const matches = title.includes(searchTerm) || description.includes(searchTerm);
            card.style.display = matches ? 'block' : 'none';

            if(matches){
                foundMatch = true;
            }
        });

        if(!foundMatch){
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
        }
    });
    //Los demas scripts estan en ../js/scripts.js
</script>





