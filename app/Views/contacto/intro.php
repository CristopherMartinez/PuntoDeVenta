<?= $this->extend('plantilla/layaout')?>

<?= $this->section('titulo')?>
prueba
<?= $this->endSection();?>
<!--Al poner el siguiente codigo mando a llamar todas las dependencias correspondientes al layaout-->
<? $this->section('contenido')?>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta ut sequi iure maxime magnam nam nostrum blanditiis voluptas? Earum totam natus ea harum beatae qui itaque quo, voluptas ipsum nisi.
    </p>
<? $this->endSection();?>    
