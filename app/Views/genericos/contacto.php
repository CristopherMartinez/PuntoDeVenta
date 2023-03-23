<!-- Container (Contact Section) -->
<!-- <div id="contact" class="container-fluid bg-black letraContaco" >
  <h2 class="text-center" style="color:whitesmoke; font-weight:bolder;">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5"">
      <p style="font-size:medium;"><span><img src="<?php  echo base_url()?>/imagenes/icons/ubicacion.png" style="width: 40px; padding-right:10px;"></span>Merida Yucatan</p>
      <p style="font-size:medium;"><span><img src="<?php  echo base_url()?>/imagenes/icons/telefono.png" style="width: 40px; padding-right:10px;" ></span>99-93-35-43-42</p>
      <p style="font-size:medium;"><span><img src="<?php  echo base_url()?>/imagenes/icons/correo.png" style="width: 40px; padding-right:10px;"></span> contacto@worldgames.com.mx</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row" style="padding-bottom: 10px;">
        <div class="col-sm-6 form-group" style="padding-bottom: 10px;">
          <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" style="font-size:medium;">
        </div>
        <div class="col-sm-6 form-group" >
          <input class="form-control" id="correo" name="correo" placeholder="Correo" type="email" required style="font-size:medium;">
        </div>
      </div>
      <textarea class="form-control" id="comentarios" name="comentarios" placeholder="Comentarios" rows="5" style="font-size:medium;"></textarea><br>
      <small class="form-text " id="contador" style="color:whitesmoke;font-size:15px;">Caracteres : </small>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-outline-primary" type="submit" style="font-size:medium; ">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const texto = document.getElementById('comentarios');
  const contador = document.getElementById('contador');
  
  texto.addEventListener('input', () => {
    const numCaracteres = texto.value.length;
    contador.textContent = `Caracteres : ${numCaracteres}`;
  });
</script> -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>

<div id="contact" class="container-fluid bg-black letraContaco" >
  <h2 class="text-center" style="color:whitesmoke; font-weight:bolder;">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p style="font-size:medium;"><span class="material-symbols-outlined" style="width: 40px; padding-right:10px">
pin_drop
</span>Merida Yucatan</p>
      <p style="font-size:medium;"><span class="material-symbols-outlined" style="width: 40px; padding-right:10px" >
call
</span>99-93-35-43-42</p>
      <p style="font-size:medium;"><span class="material-symbols-outlined" style="width: 40px; padding-right:10px">
mail
</span> contacto@worldgames.com.mx</p>
    </div>
    <div class="col-sm-7 slideanim">
      <form name="registro" method="POST" action="<?php echo base_url().'/guardar_sugerencia'?>">
        
        <div class="row" style="padding-bottom: 10px;">
          <div class="col-sm-6 form-group" style="padding-bottom: 10px;">
            <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" style="font-size:medium;">
          </div>
          <div class="col-sm-6 form-group" >
            <input class="form-control" id="correo" name="correo" placeholder="Correo" type="email" required style="font-size:medium;">
          </div>
        </div>
        <textarea class="form-control" id="comentarios" name="comentarios" placeholder="Comentarios" rows="5" style="font-size:medium;"></textarea><br>
        <small class="form-text " id="contador" style="color:whitesmoke;font-size:15px;">Caracteres : </small>
        
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-outline-primary" type="submit" style="font-size:medium; ">Enviar</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<script>
  const texto = document.getElementById('comentarios');
const contador = document.getElementById('contador');
const limiteCaracteres = 300; // Establecer el límite de caracteres aquí
texto.addEventListener('input', () => {
  const numCaracteres = texto.value.length;
  contador.textContent = `Caracteres: ${numCaracteres}`;
  // Comprobar si se ha superado el límite de caracteres
  if (numCaracteres > limiteCaracteres) {
    // Si se ha superado el límite, mostrar un mensaje de error
    // o impedir que se sigan ingresando caracteres
    texto.value = texto.value.substring(0, limiteCaracteres);
    contador.textContent = `Caracteres: ${limiteCaracteres} (límite alcanzado)`;
  }
});
 
</script>
</html>
