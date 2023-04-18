
<!-- <?php
// print_r($videojuegosXbox);
// print_r(json_encode($videojuegosXbox));
print_r(json_encode($listaVideojuegos));
?> -->

<head>
    <style>
        .list:hover{
        background-color:#c3c3c3;
        list-style:none;
        padding-left: 10px;
        cursor: hand;
        }
        .backgroundGamesPlay{
            background-image: url("<?php  echo base_url()?>/imagenes/fondoPlay8.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .submenu {
            display: none;
        }
        .visible {
            display: block;
        }

            .accordion {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .accordion-item {
            border: 1px solid black;
        }

        .accordion-header {
            background-color: #ccc;
            padding: 10px;
            cursor: pointer;
        }

        .accordion-content {
            display: none;
            padding: 10px;
        }

        .accordion-item.active .accordion-content {
            display: block;
        }


    </style>
    <!-- CSS de Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.4/css/bootstrap.min.css">
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

                        <!--Xbox One Series S-->
                        <div class="input-group mb-3 dropdown animate__animated animate__fadeInDown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php foreach ($listaVideojuegos as $juego) { ?>
                                    <label><?php echo $juego->identificador ?> (<?php echo $juego->valor ?>)</label>
                                <?php } ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php foreach ($listaVideojuegos as $videojuego) { ?>
                                    <?php foreach ($totalGAventuraXboxSS as $categoria) { ?>
                                        <li>
                                            <a class="dropdown-item" href="#" onclick="searchXboxSS(<?php echo $categoria->idCategoria;?>,<?php echo $videojuego->idConsola;?>)" data-value="<?php echo $categoria->identificador; ?>">
                                                <?php echo $categoria->identificador . ' (' . $categoria->valor . ')'; ?>
                                            </a>
                                           
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>

                        <!--Xbox One X-->
                        <div class="input-group mb-3 dropdown animate__animated animate__fadeInDown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php foreach ($XboxOneX as $juego) { ?>
                                    <label><?php echo $juego->identificador ?> (<?php echo $juego->valor ?>)</label>
                                <?php } ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php foreach ($XboxOneX as $videojuego) { ?>
                                    <?php foreach ($CantGeneroXboxX as $categoria) { ?>
                                        <li><a class="dropdown-item" href="#" data-value="<?php echo $categoria->identificador ?>"><?php echo $categoria->identificador . ' (' . $categoria->valor . ')' ?></a></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                        <!--Xbox One S-->
                        <div class="input-group mb-3 dropdown animate__animated animate__fadeInDown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php foreach ($XboxOneS as $juego) { ?>
                                    <label><?php echo $juego->identificador ?> (<?php echo $juego->valor ?>)</label>
                                <?php } ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php foreach ($XboxOneS as $videojuego) { ?>
                                    <?php foreach ($CantGeneroXboxS as $categoria) { ?>
                                        <li><a class="dropdown-item" href="#" data-value="<?php echo $categoria->identificador ?>"><?php echo $categoria->identificador . ' (' . $categoria->valor . ')' ?></a></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>

                </div>
            </div>
        </div>

        <div class="col-xl-9 col-sm-12"  style="background-color: transparent; ">
            <div class="row">
                <?php foreach ($videojuegosXbox as $juego) { ?>
                    <div class="col-12" style="margin-top: 10px;">
                        <div class="card mb-3 backgroundGamesPlay" style="max-width: auto; border-radius:5px;">
                            <div class="row g-0">
                                <div class="col-md-4 align-self-center">
                                    <img src="<?php echo base_url()?>/imagenes/<?php echo $juego['imagen']?>" class="img-fluid rounded-start" style="border-radius: 5px;" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body" id="cards-container">
                                        <h5 class="card-title" style="color:whitesmoke;"><?php echo $juego['nombre'] ?></h5>
                                        <!--Id del videojuego (no borrar)-->
                                        <p class="card-text"  style="color:whitesmoke;" hidden><?php echo $juego['idVideojuego'] ?></p>
                                        <p class="card-text"  style="color:whitesmoke;"><?php echo $juego['descripcion'] ?></p>
                                        <p class="category-tag" style="color:whitesmoke;" hidden>ID Categoria : <?php echo $juego['idCategoria'] ?></p>
                                        <p class="consola-tag" style="color:whitesmoke;" hidden>ID Consola : <?php echo $juego['idConsola'] ?></p>
                                        
                                        <!-- <p style="color:whitesmoke;">  <?php print_r($videojuegosXbox)?></p>
                                       -->

                                        <p class="card-text">

                                            <span class="col-12 col-sm-12 col-xl-4"><button type="button" class="btn btn-outline-primary" disabled style="color:whitesmoke; border-color:whitesmoke; margin-top:10px; font-weight:bolder;">Precio: $<?php echo $juego['precio'] ?></button></span>
                                            <!-- <span class="col-6 col-sm-6 col-xl-4"><button type="button" class="btn btn-outline-primary" style="margin-top:10px; margin-left:5px; font-weight:bolder;">Comprar</button></span> -->
                                            <span class="col-6 col-sm-6 col-xl-4" style="padding-left: 5px;"><button type="button" class="btn btn-outline-success" style="margin-top:10px; font-weight:bolder;">Agregar al carrito</button></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div id="noResults" style="display:none;">No se encontraron resultados de la busqueda.</div>
                <div id="noResults1" style="display:none;">No hay juegos disponibles del género seleccionado</div>
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
  const elemento1 = document.querySelector('a:contains("Elemento 1")');
  const submenu = document.querySelector('.submenu');

  elemento1.addEventListener('click', () => {
    submenu.classList.toggle('visible');
  });
</script>

<script>
    const accordionHeaders = document.querySelectorAll('.accordion-header');

    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const accordionItem = header.parentNode;
            accordionItem.classList.toggle('active');
        });
    });

</script>

<script>

    //XBOX ONE SS-------------------------------------
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
  }

  //-----------------------------------

   //XBOX ONE X-------------------------------------
  


</script>
<script>

//Funcion para buscar de acuerdo a categoria de Xbox One SS Funciona correctamente 
function searchXboxSS(categoria,consola) {
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card');
    const searchTerm = searchInput.value.toLowerCase();
    
    // Recorrer todas las tarjetas y ocultar aquellas que no coincidan con el término de búsqueda y con la categoría seleccionada
    let foundMatch = false;
    cards.forEach(function(card) {
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        const description = card.querySelector('.card-text:not([hidden])').textContent.toLowerCase();
        const categoryTag = card.querySelector('.category-tag').textContent.toLowerCase();
        const consolaTag = card.querySelector('.consola-tag').textContent.toLowerCase();
        const matches = title.includes(searchTerm) && categoryTag.includes(categoria) &&consolaTag.includes(consola);
        card.style.display = matches ? 'block' : 'none';

        if(matches){
            foundMatch = true;
        }
    });

    // Mostrar mensaje de no resultados
    const noResults = document.getElementById('noResults1');
    if(!foundMatch){
        noResults.style.display = 'block';
    } else {
        noResults.style.display = 'none';
    }
}



//XBOX ONE X



//XBOX ONE S







</script>







