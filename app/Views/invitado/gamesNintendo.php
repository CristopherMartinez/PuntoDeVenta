<head>
    <style>
        .backgroundGamesPlay{
            background-image: url("<?php  echo base_url()?>/imagenes/fondoPlay8.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .image-container {
            position: relative;
            display: inline-block;
            }

            .image-description {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            overflow: hidden;
            transition: height 0.5s;    
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            }

            .image-container:hover .image-description {
            height: 65px;
            }

            .image-description::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 50%;
            margin-left: -10px;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 10px solid rgba(0, 0, 0, 0.7);
            
            }

        /*Los demas estilos estan en ../styles/styles.css*/ 
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.min.css">
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
                        <br>

                            <!--Nintendo-->
                            <div class="input-group mb-3 dropdown animate__animated animate__fadeInDown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php foreach ($Nintendo as $juego) { ?>
                                        <label><?php echo $juego->identificador ?> (<?php echo $juego->valor ?>)</label>
                                    <?php } ?>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php foreach ($Nintendo as $videojuego) { ?>
                                        <?php foreach ($CantGeneroNintendo as $categoria) { ?>
                                            <li>
                                                <a class="dropdown-item" href="#" onclick="searchNintendo(<?php echo $categoria->idCategoria;?>,<?php echo $videojuego->idConsola;?>)" data-value="<?php echo $categoria->identificador; ?>">
                                                    <?php echo $categoria->identificador . ' (' . $categoria->valor . ')'; ?>
                                                </a>
                                            
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            </div>


                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-sm-12"  style="background-color: transparent; ">
                <div class="row">
                    <?php foreach ($videojuegosNintendo as $juego) { ?>
                        <div class="col-12" style="margin-top: 10px;">
                            <div class="card mb-3 backgroundGamesPlay" style="max-width: auto; border-radius:5px;">

                                    <div style=" padding-left:95%; padding-bottom :0px; text-decoration:none;">
                                        <button type='submit' class='btn btn-link border-0 p-0' onclick="mostrarMensaje()">
                                                <span class='material-symbols-outlined'>favorite</span>        
                                        </button>
                                    </div>  
                                    
                                    <div class="row g-0">
                                        <div class="col-md-4 align-self-center">
                                                <div class="image-container">       
                                                    <img src="<?php echo base_url()?>/imagenes/<?php echo $juego['imagen']?>" class="img-fluid rounded-start" style="border-radius: 5px; height:200px;" alt="...">
                                                    <div class="image-description"><?php echo $juego['descripcion'] ?></div>
                                                </div>
                                        
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body" id="cards-container">
                                                <h1 class="card-title" style="color:whitesmoke;"><?php echo $juego['nombre'] ?></h1>
                                                <h4 class="card-text"  style="color:whitesmoke;"><?php echo $juego['nombreConsola'] ?></h4>
                                                <!--Id del videojuego (no borrar)-->
                                                <p class="card-text"  style="color:whitesmoke;" hidden><?php echo $juego['idVideojuego'] ?></p>
                                                <p class="card-text"  style="color:whitesmoke;" hidden><?php echo $juego['descripcion'] ?></p>
                                                <!--Campos ocultos (no borrar)-->
                                                <p class="category-tag" style="color:whitesmoke;" hidden>ID Categoria : <?php echo $juego['idCategoria'] ?></p>
                                                <p class="consola-tag" style="color:whitesmoke;" hidden>ID Consola : <?php echo $juego['idConsola'] ?></p>
                                                <p class="card-text" style="padding-top:5px;">

                                                    <span class="col-12 col-sm-12 col-xl-4"><button type="button" class="btn btn-outline-primary" disabled style="color:whitesmoke; border-color:whitesmoke; margin-top:10px; font-weight:bolder;">Precio: $<?php echo $juego['precio'] ?></button></span>
                                                    <span class="col-6 col-sm-6 col-xl-4" style="padding-left: 5px;"><button type="submit" class="btn btn-success" style="margin-top:10px; font-weight:bolder;" onclick="mostrarMensaje()">Agregar al carrito</button></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    <?php } ?>
                    <div id="noResults" style="display:none; font-size:28px; color:black; font-weight:bold;">No se encontraron resultados de la busqueda.</div>
                </div>
            </div>

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

<script>
    //-------------------------------------------------------------------------------------
//PlayStation 3-----------------------------------
function searchNintendo(categoria,consola) {
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





