<div class="card" style="width: 18rem;">
<?php
if($numero==0){
  ?>
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    <?= $titulo; ?>
  </div>
<?php
}elseif($numero==1){
  ?>
   <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-danger">Prueba</a>
  </div>
  <?php
}//Fin del else
?>
</div>