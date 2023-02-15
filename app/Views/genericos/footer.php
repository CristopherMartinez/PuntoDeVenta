
<footer class="container-fluid text-center backgrounFooter">
  <!-- <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a> -->
    <div class="row">
      <div class="titleFooter"><b>World Games</b></div>
      <div class="col-md-3" style="margin-top: 30px; color:#e60202;">
        <h5><b>Información de la empresa</b></h5>
        <ul class="list-unstyled">
          <li><a href="#" class="informacion">¿Quienes somos?</a></li>
          <li><a href="#" class="informacion">Aviso de privacidad</a></li>
          <li><a href="#" class="informacion">Terminos y condiciones</a></li>
        </ul>
      </div>
      <div class="col-md-3" style="margin-top: 30px;">
        <h5 style="color:#e60202;"><b>Puntos de distribucion</b></h5>
        <ul class="list-unstyled">
          <li><a href="#" class="informacion">Montecarlo</a></li>
          <li><a href="#" class="informacion">Centro</a></li>
        </ul>
      </div>
      <div class="col-md-3" style="margin-top: 30px;">
        <h5 style="color:#e60202;"><b>Contacto</b></h5>
        <ul class="list-unstyled">
          <li><i class="fa fa-phone"></i> Teléfono: 99-93-35-43-42</li>
          <li><i class="fa fa-envelope"></i>Email: contacto@worldgames.com</li>
        </ul>
      </div>
      <div class="col-md-3" style="margin-top: 30px;">
        <h5 style="color:#e60202;"><b>Síguenos en</b></h5>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
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