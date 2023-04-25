<?php
  session_start();
  
  //Agregar al carrito
  if($_SERVER['REQUEST_METHOD']=="POST"){
  
    // if(isset($_POST['Add_To_Cart']))
    // {
    //     if(isset($_SESSION['cart']))
    //     {
    //       $myitems = array_column($_SESSION['cart'],'nombre');
    //       if(in_array($_POST['nombre'],$myitems))
    //       {

    //         $session = session();
    //         $session->setFlashdata('error', 'Ya se agrego al carrito');
    //           echo "<script> 
    //           window.location.href = '" . base_url() . "/usuario/inicio';
    //           exit();
    //           </script>";
    //       }
    //       else
    //         {
    //         $count = count($_SESSION['cart']);
    //         $_SESSION['cart'][$count] = 
    //         array(
    //         'idVideojuego'=>$_POST['idVideojuego'],
    //         'nombre'=>$_POST['nombre'],
    //         'precio'=>$_POST['precio'],
    //         'NombreConsola'=>$_POST['nombreConsola'],
    //         'Cantidad'=>1);

    //         $session = session();
    //         $session->setFlashdata('success', 'Agregado al carrito');
    //         echo "<script>
    //         window.location.href = '" . base_url() . "/usuario/inicio';
    //         exit();
    //         </script>";
    //         }
    //       }
             
    //     else
    //     {
    //         $_SESSION['cart'][0]=
    //         array(
    //           'idVideojuego'=>$_POST['idVideojuego'],
    //           'nombre'=>$_POST['nombre'],
    //           'precio'=>$_POST['precio'],
    //           'Cantidad'=>1);

    //           $session = session();
    //           $session->setFlashdata('success', 'Agregado al carrito');
    //           echo "<script>          
    //           window.location.href = '" . base_url() . "/index.php/usuario/inicio';
    //           </script>";
            
    //     }
    // }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //Verificamos que exista Add_To_Cart mandado mediante post
        if (isset($_POST['Add_To_Cart'])) {
            //Checamos que exista en la sesion un arreglo llamado cart
            if (isset($_SESSION['cart'])) {
                //Si existe asignamos a myitems de acuerdo a nombre y el idVideojuego
                $myitems = array_column($_SESSION['cart'], 'nombre', 'idVideojuego');
                if (isset($myitems[$_POST['idVideojuego']]) && $myitems[$_POST['idVideojuego']] == $_POST['nombre']) {
                    //Asignamos un setFlashData para decir que ya esta en el carrito 
                    $session = session();
                    $session->setFlashdata('error', 'Este elemento ya está en el carrito');
                    //Redirigimos a pagina inicio del usuario logueado
                    echo "<script> 
                        window.location.href = '" . base_url() . "/usuario/inicio';
                        exit();
                    </script>";
                } else {
                    //Si aun no existe en el carrito lo insertamos
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array(
                        'idVideojuego' => $_POST['idVideojuego'],
                        'nombre' => $_POST['nombre'],
                        'precio' => $_POST['precio'],
                        'NombreConsola' => $_POST['nombreConsola'],
                        'Cantidad' => 1
                    );
                    $session = session();
                    $session->setFlashdata('success', 'Agregado al carrito');
                    echo "<script>
                        window.location.href = '" . base_url() . "/usuario/inicio';
                        exit();
                    </script>";
                }
            } else {
                 //Si aun no existe en el carrito lo insertamos
                $_SESSION['cart'][0] = array(
                    'idVideojuego' => $_POST['idVideojuego'],
                    'nombre' => $_POST['nombre'],
                    'precio' => $_POST['precio'],
                    'NombreConsola' => $_POST['nombreConsola'],
                    'Cantidad' => 1
                );
                $session = session();
                $session->setFlashdata('success', 'Agregado al carrito');
                echo "<script>          
                    window.location.href = '" . base_url() . "/index.php/usuario/inicio';
                </script>";
            }
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

//     if(isset($_POST['Remove_Item']))
// {
//     foreach($_SESSION['cart'] as $key => $value)
//     {
//         if(isset($value['idVideojuego']) && $value['idVideojuego']==$_POST['idVideojuego'])
//         {
//             unset($_SESSION['cart'][$key]);
//             $_SESSION['cart'] = array_values($_SESSION['cart']);
//             echo"
//             <script>
//             alert('Eliminado del carrito');
//             window.location.href = '" . base_url() . "/usuario/inicio';
//             exit();
//             </script>";
//         } 
//     }
// }


    //REMOVER DEL CARRITO
    // if(isset($_POST['Remove_Item']))
    // {
    //     foreach($_SESSION['cart'] as $key => $value)
    //     {
         
    //         if($value['idVideojuego']==$_POST['idVideojuego'])
    //         {
    //             unset($_SESSION['cart'][$key]);
    //             $_SESSION['cart'] = array_values($_SESSION['cart']);
    //             echo"
    //             <script>
    //             alert('Eliminado del carrito');
    //             window.location.href = '" . base_url() . "/usuario/inicio';
    //             exit();
    //             </script>";
    //         } 
    //     }
    // }

    // if(isset($_POST['Remove_Item']))
    // {
    //     foreach($_SESSION['cart'] as $key => $value)
    //     {
    //         if($value['nombre']==$_POST['nombre'] && $value['idVideojuego'] == $_POST['idVideojuego'])
    //         {
    //             unset($_SESSION['cart'][$key]);
    //             $_SESSION['cart'] = array_values($_SESSION['cart']);
    //             echo"
    //             <script>
    //             alert('Eliminado del carrito');
    //             window.location.href = '" . base_url() . "/usuario/inicio';
    //             exit();
    //             </script>";
    //         } 
    //     }
    // }


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

