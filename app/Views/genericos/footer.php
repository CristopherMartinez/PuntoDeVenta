<footer class="text-center text-lg-start bg-black text-muted" >

  <section class="">
    <div class="container text-center text-md-start mt-5" style="color: whitesmoke;">

      <div class="row mt-3">


        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
   
          <h6 class="text-uppercase fw-bold mb-4" style="font-size: 17px;">
            Información de la empresa
          </h6>
          <ul class="list-unstyled" style="font-size:15px;">
          <li><a href="#nosotros" class="informacion">¿Quienes somos?</a></li>
          <!-- <li><a href="#" class="informacion">Aviso de privacidad</a></li> -->
          <li><a href="#visionMision" class="informacion">Misión y Visión</a></li>
        </ul>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <h6 class="text-uppercase fw-bold mb-4" style="font-weight: bolder; font-size:17px;">Contacto</h6>
          <p style="font-size:15px;"><i class="fas fa-home me-3 text-secondary" ></i>Merida Yucatán</p>
          <p style="font-size:15px;">
            <i class="fas fa-envelope me-3 text-secondary"></i>
            contacto@worldgames.com.mx
          </p>
          <p style="font-size:15px;""><i class="fas fa-phone me-3 text-secondary"></i> + 52 99 93 34 23 22</p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h5 style="color:whitesmoke; font-weight: bold; font-size:22px;"><b>Síguenos en</b></h5>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><img src="<?php  echo base_url()?>/imagenes/icons/face.png" style="width: 30px;"></a></li>
            <li class="list-inline-item"><a href="#"><img src="<?php  echo base_url()?>/imagenes/icons/instagram.png" style="width: 30px;"></a></li>
            <li class="list-inline-item"><a href="#"><img src="<?php  echo base_url()?>/imagenes/icons/tiktok.png" style="width: 30px;"></i></a></li>
            <li class="list-inline-item"><a href="#"><img src="<?php  echo base_url()?>/imagenes/icons/twiter.png" style="width: 30px;"></i></a></li>
            <li class="list-inline-item"><a href="#"><img src="<?php  echo base_url()?>/imagenes/icons/twitch.png" style="width: 30px;"></i></a></li>
          </ul>
        </div>

      </div>

    </div>
  </section>
 
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="#">WorldGames.com</a>
  </div>



</footer>


<script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
    
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  })
</script>



</body>
</html>