

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





