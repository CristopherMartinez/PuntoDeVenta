<?php
  session_start();
  
  //Agregar al carrito
  if($_SERVER['REQUEST_METHOD']=="POST"){
  
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
          $myitems = array_column($_SESSION['cart'],'nombre');
          if(in_array($_POST['nombre'],$myitems))
          {

            $session = session();
            $session->setFlashdata('error', 'Ya se agrego al carrito');
              echo "<script> 
              window.location.href = '" . base_url() . "/usuario/inicio';
              exit();
              </script>";
          }
          else
            {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = 
            array(
            'idVideojuego'=>$_POST['idVideojuego'],
            'nombre'=>$_POST['nombre'],
            'precio'=>$_POST['precio'],
            'Cantidad'=>1);

            $session = session();
            $session->setFlashdata('success', 'Agregado al carrito');
            echo "<script>
            window.location.href = '" . base_url() . "/usuario/inicio';
            exit();
            </script>";
            }
          }
             
        else
        {
            $_SESSION['cart'][0]=
            array(
              'idVideojuego'=>$_POST['idVideojuego'],
              'nombre'=>$_POST['nombre'],
              'precio'=>$_POST['precio'],
              'Cantidad'=>1);

              $session = session();
              $session->setFlashdata('success', 'Agregado al carrito');
              echo "<script>          
              window.location.href = '" . base_url() . "/index.php/usuario/inicio';
              </script>";
            
        }
    }
    //REMOVER DEL CARRITO
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
         
            if($value['nombre']==$_POST['nombre'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo"
                <script>
                alert('Eliminado del carrito');
                window.location.href = '" . base_url() . "/usuario/inicio';
                exit();
                </script>";
            } 
        }
    }

}

    
?>


<?php if (session()->has('success')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?= session('success') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: '<?= session('error') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

