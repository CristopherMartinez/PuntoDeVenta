<?php
namespace App\Controllers\usuario;
use App\Models\usuario\RegistrarUsuario;
use App\Controllers\BaseController;
use App\Models\Videojuegos;
use App\Models\usuario\Tarjeta;
use App\Models\usuario\Ordenes;
use App\Models\usuario\OrdenesUsuario;
use App\Models\usuario\VideojuegosUsuario;
use App\ModelS\generico\Email;
use App\Models\generico\Puntos;

class ShoppingCarController extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();

    }
    //Funcion para mostrar el carrito de compras
    public function index(){
        
       // Verificar si la sesión está iniciada
        if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Obtener los datos del usuario de la sesión
        $session = session();
        $usuario = array(
            'nombre' => $session->get('nombre'),
            'membresia' => $session->get('membresia'),
        );

        //Prueba , aqui debemos recuperar de la session los videojuegos que se guarden en la sesion y mostrarlos
        $videojuegos = new Videojuegos();
        // $data2["videojuegos"]=$videojuegos->get10VideogamesPlay();
        $data2["videojuegos"]=$videojuegos->getVideogamesCartTest();



        // Cargar la vista del carrito de compras
        $vista = view('genericos/header') .
                 view('usuario/navbarLog', $usuario).
                 view('usuario/ShoppingCar',$data2);

        return $vista;

    }

    //Agregar al carrito desde inicio
    public function agregarAlCarrito(){
        //Checamos que exista en la sesion un arreglo llamado cart
        if (isset($_SESSION['cart'])) {
            //Si existe asignamos a myitems de acuerdo a nombre y el idVideojuego
            $myitems = array_column($_SESSION['cart'], 'nombre', 'idVideojuego');
            if (isset($myitems[$_POST['idVideojuego']]) && $myitems[$_POST['idVideojuego']] == $_POST['nombre']) {
                //Asignamos un setFlashData para decir que ya esta en el carrito 
                $session = session();
                $session->setFlashdata('error', 'Este elemento ya está en el carrito');
                //Redirigimos a pagina inicio del usuario logueado
                return redirect()->to('usuario/inicio');
            } else {
                //Si aun no existe en el carrito lo insertamos
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array(
                    'idVideojuego' => $_POST['idVideojuego'],
                    'nombre' => $_POST['nombre'],
                    'precio' => $_POST['precio'],
                    'NombreConsola' => $_POST['nombreConsola'],
                    'Cantidad' => 1,
                    "imagen" => $_POST['imagen']
                );
                $session = session();
                $session->setFlashdata('success', 'Agregado al carrito');
                return redirect()->to('usuario/inicio');
            }
        } else {
             //Si aun no existe en el carrito lo insertamos
            $_SESSION['cart'][0] = array(
                'idVideojuego' => $_POST['idVideojuego'],
                'nombre' => $_POST['nombre'],
                'precio' => $_POST['precio'],
                'NombreConsola' => $_POST['nombreConsola'],
                'Cantidad' => 1,
                "imagen" => $_POST['imagen']
            );
            $session = session();
            $session->setFlashdata('success', 'Agregado al carrito');
            return redirect()->to('usuario/inicio');
        }
    }

    //Agregar al carrito desde deseos
    public function agregarAlCarritoDesdeDeseos(){
        //Checamos que exista en la sesion un arreglo llamado cart
        if (isset($_SESSION['cart'])) {
            //Si existe asignamos a myitems de acuerdo a nombre y el idVideojuego
            $myitems = array_column($_SESSION['cart'], 'nombre', 'idVideojuego');
            if (isset($myitems[$_POST['idVideojuego']]) && $myitems[$_POST['idVideojuego']] == $_POST['nombre']) {
                //Asignamos un setFlashData para decir que ya esta en el carrito 
                $session = session();
                $session->setFlashdata('error', 'Este elemento ya está en el carrito');
                //Redirigimos a pagina inicio del usuario logueado
                return redirect()->to('usuario/listaDeseos');
            } else {
                //Si aun no existe en el carrito lo insertamos
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array(
                    'idVideojuego' => $_POST['idVideojuego'],
                    'nombre' => $_POST['nombre'],
                    'precio' => $_POST['precio'],
                    'NombreConsola' => $_POST['nombreConsola'],
                    'Cantidad' => 1,
                    "imagen" => $_POST['imagen']
                );
                //Se quitan de lista de deseos
                foreach($_SESSION['deseos'] as $key => $value)
                {
                
                    if($value['nombreDeseo']==$_POST['nombre'])
                    {
                        unset($_SESSION['deseos'][$key]);
                        $_SESSION['deseos'] = array_values($_SESSION['deseos']);
                    } 
                }


                $session = session();
                $session->setFlashdata('success', 'Agregado al carrito');
                return redirect()->to('usuario/listaDeseos');
            }
        } else {
             //Si aun no existe en el carrito lo insertamos
            $_SESSION['cart'][0] = array(
                'idVideojuego' => $_POST['idVideojuego'],
                'nombre' => $_POST['nombre'],
                'precio' => $_POST['precio'],
                'NombreConsola' => $_POST['nombreConsola'],
                'Cantidad' => 1,
                "imagen" => $_POST['imagen']
            );
            //Se quitan de lista de deseos
            foreach($_SESSION['deseos'] as $key => $value)
                {
                
                    if($value['nombreDeseo']==$_POST['nombre'])
                    {
                        unset($_SESSION['deseos'][$key]);
                        $_SESSION['deseos'] = array_values($_SESSION['deseos']);
                    } 
                }

            $session = session();
            $session->setFlashdata('success', 'Agregado al carrito');
            return redirect()->to('usuario/listaDeseos');
        }
    }

     //Agregar al carrito desde page Xbox
     public function agregarAlCarritoXbox(){
        //Checamos que exista en la sesion un arreglo llamado cart
        if (isset($_SESSION['cart'])) {
            //Si existe asignamos a myitems de acuerdo a nombre y el idVideojuego
            $myitems = array_column($_SESSION['cart'], 'nombre', 'idVideojuego');
            if (isset($myitems[$_POST['idVideojuego']]) && $myitems[$_POST['idVideojuego']] == $_POST['nombre']) {
                //Asignamos un setFlashData para decir que ya esta en el carrito 
                $session = session();
                $session->setFlashdata('error', 'Este elemento ya está en el carrito');
                //Redirigimos a pagina inicio del usuario logueado
                return redirect()->to('usuario/gamesXbox');
            } else {
                //Si aun no existe en el carrito lo insertamos
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array(
                    'idVideojuego' => $_POST['idVideojuego'],
                    'nombre' => $_POST['nombre'],
                    'precio' => $_POST['precio'],
                    'NombreConsola' => $_POST['nombreConsola'],
                    'Cantidad' => 1,
                    "imagen" => $_POST['imagen']
                );

                $session = session();
                $session->setFlashdata('success', 'Agregado al carrito');
                return redirect()->to('usuario/gamesXbox');
            }
        } else {
             //Si aun no existe en el carrito lo insertamos
            $_SESSION['cart'][0] = array(
                'idVideojuego' => $_POST['idVideojuego'],
                'nombre' => $_POST['nombre'],
                'precio' => $_POST['precio'],
                'NombreConsola' => $_POST['nombreConsola'],
                'Cantidad' => 1,
                "imagen" => $_POST['imagen']
            );

            $session = session();
            $session->setFlashdata('success', 'Agregado al carrito');
            return redirect()->to('usuario/gamesXbox');
        }
    }

    //Agregar al carrito desde page PlayStation
    public function agregarAlCarritoPlayStation(){
        //Checamos que exista en la sesion un arreglo llamado cart
        if (isset($_SESSION['cart'])) {
            //Si existe asignamos a myitems de acuerdo a nombre y el idVideojuego
            $myitems = array_column($_SESSION['cart'], 'nombre', 'idVideojuego');
            if (isset($myitems[$_POST['idVideojuego']]) && $myitems[$_POST['idVideojuego']] == $_POST['nombre']) {
                //Asignamos un setFlashData para decir que ya esta en el carrito 
                $session = session();
                $session->setFlashdata('error', 'Este elemento ya está en el carrito');
                //Redirigimos a pagina inicio del usuario logueado
                return redirect()->to('usuario/gamesPlayStation');
            } else {
                //Si aun no existe en el carrito lo insertamos
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array(
                    'idVideojuego' => $_POST['idVideojuego'],
                    'nombre' => $_POST['nombre'],
                    'precio' => $_POST['precio'],
                    'NombreConsola' => $_POST['nombreConsola'],
                    'Cantidad' => 1,
                    "imagen" => $_POST['imagen']
                );

                $session = session();
                $session->setFlashdata('success', 'Agregado al carrito');
                return redirect()->to('usuario/gamesPlayStation');
            }
        } else {
             //Si aun no existe en el carrito lo insertamos
            $_SESSION['cart'][0] = array(
                'idVideojuego' => $_POST['idVideojuego'],
                'nombre' => $_POST['nombre'],
                'precio' => $_POST['precio'],
                'NombreConsola' => $_POST['nombreConsola'],
                'Cantidad' => 1,
                "imagen" => $_POST['imagen']
            );

            $session = session();
            $session->setFlashdata('success', 'Agregado al carrito');
            return redirect()->to('usuario/gamesPlayStation');
        }
    }

    //Agregar al carrito desde page Nintendo
    public function agregarAlCarritoNintendo(){
        //Checamos que exista en la sesion un arreglo llamado cart
        if (isset($_SESSION['cart'])) {
            //Si existe asignamos a myitems de acuerdo a nombre y el idVideojuego
            $myitems = array_column($_SESSION['cart'], 'nombre', 'idVideojuego');
            if (isset($myitems[$_POST['idVideojuego']]) && $myitems[$_POST['idVideojuego']] == $_POST['nombre']) {
                //Asignamos un setFlashData para decir que ya esta en el carrito 
                $session = session();
                $session->setFlashdata('error', 'Este elemento ya está en el carrito');
                //Redirigimos a pagina inicio del usuario logueado
                return redirect()->to('usuario/gamesNintendo');
            } else {
                //Si aun no existe en el carrito lo insertamos
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array(
                    'idVideojuego' => $_POST['idVideojuego'],
                    'nombre' => $_POST['nombre'],
                    'precio' => $_POST['precio'],
                    'NombreConsola' => $_POST['nombreConsola'],
                    'Cantidad' => 1,
                    "imagen" => $_POST['imagen']
                );

                $session = session();
                $session->setFlashdata('success', 'Agregado al carrito');
                return redirect()->to('usuario/gamesNintendo');
            }
        } else {
             //Si aun no existe en el carrito lo insertamos
            $_SESSION['cart'][0] = array(
                'idVideojuego' => $_POST['idVideojuego'],
                'nombre' => $_POST['nombre'],
                'precio' => $_POST['precio'],
                'NombreConsola' => $_POST['nombreConsola'],
                'Cantidad' => 1,
                "imagen" => $_POST['imagen']
            );

            $session = session();
            $session->setFlashdata('success', 'Agregado al carrito');
            return redirect()->to('usuario/gamesNintendo');
        }
    }
    
    public function   listaCarrito(){

         // Verificar si la sesión está iniciada
         if (!$this->session->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Obtener los datos del usuario de la sesión
        $session = session();
        $usuario = array(
            'nombre' => $session->get('nombre'),
            'membresia' => $session->get('membresia'),
        );

        //RecuperarTarjetas
        $tarjeta = new Tarjeta();

        $data["tarjetas"]=$tarjeta->recuperarTarjetas($_SESSION['datosUsuario'][0]['usuario']);


        $vista = view('genericos/header') .
                 view('usuario/navbarLog',$usuario).
                 view('usuario/listaCarrito',$data);

        return $vista;
    }
    //Funcion para guardar la tarjeta del cliente
    public function guardarTarjeta(){
        $tarjeta = new Tarjeta();
    
        $data = [
            "usuario"=>$_SESSION['datosUsuario'][0]['usuario'],
            "nombre" => $_POST['nombre1'],
            "apellidos" => $_POST["apellidos1"],
            "numeroTarjeta" => $_POST["tarjeta1"],
            "direccion" => $_POST["direccion1"],
            "fechaVencimiento" => $_POST["fechaVencimiento1"],
            "cvv" => $_POST["cvv1"],
        ];

        //Contamos cuantas tarjetas tiene el usuario si tiene mas de 4 mostramos mensaje de que ha alcanzado el
        //limite
        $numTarjetas = $tarjeta->contarTarjetas($_SESSION['datosUsuario'][0]['usuario']);

        if (($numTarjetas >= 4)) {
            $session = session();
            $session->setFlashdata('numTarjetas', 'Se alcanzo el limite de tarjetas que puedes agregar');
            return redirect()->to('usuario/listaCarrito');
        }
        
        if($tarjeta->existeTarjeta($_POST["tarjeta1"]) == False){
    
            $tarjeta->insert($data);
            $session = session();
            $session->setFlashdata('success', 'Se agrego correctamente la tarjeta');
            return redirect()->to('usuario/listaCarrito');
        }else{
            //ya existe la tarjeta 
            $session = session();
            $session->setFlashdata('error', 'Ya está dada de alta esta tarjeta');
            return redirect()->to('usuario/listaCarrito');
        }
    }

    //Comprar sin agregar tarjeta directo 
    public function comprar(){

        
        //Si existe en la sesion el arreglo carrito
        if(isset($_SESSION['cart'])){
        $ordenes = new Ordenes();
        $videojuego = new Videojuegos();
        //Generamos un folio aleatorio
        $folio = rand(1000000000, 9999999999);
        //Obtenemos la fecha actual y hora
        $fechaVenta = date('Y-m-d H:i:s');

        //Se genera arreglo con datos de la venta
        $data = [
            "usuario"=>$_SESSION['datosUsuario'][0]['usuario'],
            "folio"=> $folio,
            "nombre" => $_POST['nombre'],
            "apellidos" => $_POST["apellidos"],
            "numeroTarjeta" => $_POST["tarjeta"],
            "direccion" => $_POST["direccion"],
            "fechaVencimiento" => $_POST["fechaVencimiento"],
            "cvv" => $_POST["cvv"],
            "fechaVenta"=> $fechaVenta
        ];

        $ordenes->insert($data);
        //Obtenemos el idOrden que se genero automaticamente 
        $idOrden = $ordenes->getConnection()->insert_id;

        // //Obtenemos el folio
        // $folio = $ordenes->getFolio($idOrden);
    
        $ordenesUsuario = new OrdenesUsuario();

        session_start();

        // Creamos un arreglo para almacenar los datos de todas las ventas
        $ventas = [];

        foreach ($_SESSION['cart'] as $key => $values) {
            $nombre = $values['nombre'];
            $precio = $values['precio'];
            $cantidad = $values['Cantidad'];
            $idVideojuego = $values['idVideojuego'];
            $consola = $values['NombreConsola'];

            // Agregamos los datos de la venta al arreglo de ventas
            $ventas[] = [
                "idOrden" => $idOrden,
                "idVideojuego"=>$idVideojuego,
                "nombre" => $nombre,
                "consola" => $consola,
                "precio" => $precio,
                "cantidad" => $cantidad,
            ];             
        }

        // //Aqui debe ponerse el arreglo con las ventas finales una vez se verifiquen que juegos ya se tienen
        // $vid = new VideojuegosUsuario();
        // $ventasFinales  = $vid->videojuegosFinales($_SESSION['datosUsuario'][0]['usuario'],$ventas);


        // if (empty($ventasFinales )) {
        //     // Mostramos mensaje de que ya se han comprado todos los videojuegos agregados
        //     $session = session();
        //     $session->setFlashdata('TodosComprados', 'Todos los videojuegos que intentaste comprar ya han sido adquiridos por ti anteriormente');
        //     return redirect()->to('usuario/listaCarrito');
        // }

        //En el foreach se debe iterar sobre el el arreglo de ventas finales

        foreach ($ventas  as $venta) {
            $ordenesUsuario->insert($venta);
            
            // Obtener la cantidad actual del videojuego correspondiente
            $videojuegoActual = $videojuego->find($venta['idVideojuego']);
            $cantidadActual = $videojuegoActual['cantidadInventario'];
            
            // Calcular la nueva cantidad de inventario
            $nuevaCantidad = $cantidadActual - $venta['cantidad'];
            
            // Actualizar la cantidad de inventario en la base de datos
            $actualizarLicencias = [
                "cantidadInventario" => $nuevaCantidad
            ];
            $videojuego->update($venta['idVideojuego'], $actualizarLicencias);
        }
        
        //Se llama a funcion para agregar a tabla de VideojuegosUsuario
         $this->addToVideojuegosUsuario();

        // Eliminamos el carrito de la sesión
        unset($_SESSION['cart']);

        //Obtenemos el folio
        $folio = $ordenes->getFolio($idOrden);
    

        //Llamamos a la funcion sendCorreoCompra que esta en el modelo de Email
        $email = new Email();
        $email->sendCorreoCompra($ventas,$idOrden,$folio);

        return redirect()->to('usuario/listaCarrito');
        }
        else{
            
            //Mostrar mensaje de que no hay en el carrito cosas
            $session = session();
            $session->setFlashdata('SinCompras', 'No hay ningun videojuego agregado al carrito');
            return redirect()->to('usuario/listaCarrito');
        }

    }

     //Funcion para comprar con tarjeta que se seleccione cuando ya se hayaa guardado alguna tarjeta
     //CORRECTO
     public function comprarConTarjetaGuardada(){

        $tarjeta = new Tarjeta();
        //Obtenemos la tarjeta seleccionada,la fecha y el cvv
        $tarjetaSeleccionada = $_POST['tarjeta_seleccionada'];
        $fecha = $_POST['fechaVencimientomodalTarjetas'];
        $cvv = $_POST['cvvmodalTarjetas'];
        $datosTarjeta = [];
        //Recuperamos los datos de la tarjeta con el usuario y el numero de tarjeta  y guardamos dentro de arreglo datosTarjeta
        $datosTarjeta = $tarjeta->recuperarDatosTarjeta($_SESSION['datosUsuario'][0]['usuario'],$tarjetaSeleccionada);
 
        //Si son iguales a los de la base de datos se realiza la compra
        if($cvv == $datosTarjeta[0]['cvv'] && $fecha == $datosTarjeta[0]['fechaVencimiento']){
            //Si existe en la sesion el arreglo carrito
            if(isset($_SESSION['cart'])){

                session_start();
                // Creamos un arreglo para almacenar los datos de todas las ventas
                $ventas = [];
                $ordenes = new Ordenes();
                $videojuego = new Videojuegos();
                $ordenesUsuario = new OrdenesUsuario();
                //Generamos un folio aleatorio
                $folio = rand(1000000000, 9999999999);
                //Obtenemos la fecha actual y hora
                $fechaVenta = date('Y-m-d H:i:s');
                
                //Se genera arreglo con datos de la venta
                $data = [
                    "usuario"=>$_SESSION['datosUsuario'][0]['usuario'],
                    "folio"=> $folio,
                    "nombre" => $datosTarjeta[0]['nombre'],
                    "apellidos" => $datosTarjeta[0]['apellidos'],
                    "numeroTarjeta" => $datosTarjeta[0]['numeroTarjeta'],
                    "direccion" => $datosTarjeta[0]['direccion'],
                    "fechaVencimiento" => $datosTarjeta[0]['fechaVencimiento'],
                    "cvv" => $datosTarjeta[0]['cvv'],
                    "fechaVenta"=> $fechaVenta
                ];

                $ordenes->insert($data);
                //Obtenemos el idOrden que se genero automaticamente 
                $idOrden = $ordenes->getConnection()->insert_id;
        
                foreach ($_SESSION['cart'] as $key => $values) {
                    $nombre = $values['nombre'];
                    $precio = $values['precio'];
                    $cantidad = $values['Cantidad'];
                    $idVideojuego = $values['idVideojuego'];
                    $consola = $values['NombreConsola'];
        
                    // Agregamos los datos de la venta al arreglo de ventas
                    $ventas[] = [
                        "idOrden" => $idOrden,
                        "idVideojuego"=>$idVideojuego,
                        "usuario"=> $_SESSION['datosUsuario'][0]['usuario'],
                        "nombre" => $nombre,
                        "consola" => $consola,
                        "precio" => $precio,
                        "cantidad" => $cantidad,
                    ];             
                }
       
                //Aqui debe ponerse el arreglo con las ventas finales una vez se verifiquen que juegos ya se tienen
                $orden = new OrdenesUsuario();
                //Ventas finales de tabla de videojuegosUsuario
                $ventasFinales  = $orden->videojuegosFinales($_SESSION['datosUsuario'][0]['usuario'],$ventas);
                //Ventas finales de tabla de ordenesUsuario

                if (empty($ventasFinales )) {

                    // Mostramos mensaje de que ya se han comprado todos los videojuegos agregados
                    $session = session();
                    $session->setFlashdata('TodosComprados', 'Todos los videojuegos que intentaste comprar ya han sido adquiridos por ti anteriormente');

                    $or = new Ordenes();
                    $ultimoRegistro = $or->orderBy('idOrden', 'DESC')->first();
                    if (!empty($ultimoRegistro)) {
                        $or->where('idOrden', $ultimoRegistro['idOrden'])->delete();
                    }

                    return redirect()->to('usuario/listaCarrito');
                }

                foreach ($ventasFinales as $venta) {
                    $ordenesUsuario->insert($venta);
                    
                    // Obtener la cantidad actual del videojuego correspondiente
                    $videojuegoActual = $videojuego->find($venta['idVideojuego']);
                    $cantidadActual = $videojuegoActual['cantidadInventario'];
                    
                    // Calcular la nueva cantidad de inventario
                    $nuevaCantidad = $cantidadActual - $venta['cantidad'];
                    
                    // Actualizar la cantidad de inventario en la base de datos
                    $actualizarLicencias = [
                        "cantidadInventario" => $nuevaCantidad
                    ];
                    $videojuego->update($venta['idVideojuego'], $actualizarLicencias);
                }
                
                // //Se llama a funcion para agregar a tabla de VideojuegosUsuario
                $this->addToVideojuegosUsuario();
        
                // Eliminamos el carrito de la sesión
                unset($_SESSION['cart']);
        
                //Obtenemos el folio
                $folio = $ordenes->getFolio($idOrden);

                //Llamamos a la funcion sendCorreoCompra que esta en el modelo de Email
                $email = new Email();
                $email->sendCorreoCompra($ventasFinales,$idOrden,$folio);

                
        
                return redirect()->to('usuario/listaCarrito');
                }
                else{
                    
                    //Mostrar mensaje de que no hay en el carrito cosas
                    $session = session();
                    $session->setFlashdata('SinCompras', 'No hay ningun videojuego agregado al carrito');
                    return redirect()->to('usuario/listaCarrito');
          
                }
            }
        else
        {
            //Si no son correctos los datos 
            $session = session();
            $session->setFlashdata('datosDeTarjetaError', 'Datos de fecha de vencimiento o cvv incorrectos');
            return redirect()->to('usuario/listaCarrito');
        }

    }

    //Realizar compra usuario insertando en Tabla de VideojuegosUsuario y agregando puntos
    //CORRECTO
    public function addToVideojuegosUsuario()
    {
         $videojuegosUsuario = new VideojuegosUsuario();
         $ordenes = new Ordenes();
         $puntos = new Puntos();

        session_start();

        // Creamos un arreglo para almacenar los datos de todas las ventas
        $ventas = [];

        if(isset($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $key => $values) {
                $nombre = $values['nombre'];
                $consola = $values['NombreConsola'];
                $idVideojuego = $values['idVideojuego'];
                $precio = $values['precio'];
                $imagen = $values['imagen'];
    
                // Agregamos los datos de la venta al arreglo 
                $ventas[] = [
                    "usuario"=>$_SESSION['datosUsuario'][0]['usuario'],
                    "idVideojuego" => $idVideojuego,
                    "nombreVideojuego" => $nombre,
                    "consola" => $consola,
                    "precio" => $precio,
                    "imagen"=> $imagen
                ];    
                
                
            }

            //Aqui debe ponerse el arreglo con las ventas finales una vez se verifiquen que juegos ya se tienen
            $vid = new VideojuegosUsuario();
            //Ventas finales de tabla de videojuegosUsuario
            $ventasFinales  = $vid->videojuegosFinales($_SESSION['datosUsuario'][0]['usuario'],$ventas);
            //Ventas finales de tabla de ordenesUsuario

            if (empty($ventasFinales )) {
                // Mostramos mensaje de que ya se han comprado todos los videojuegos agregados
                $session = session();
                $session->setFlashdata('TodosComprados', 'Algunos juegos ya han sido adquiridos por ti');
                // return redirect()->to('usuario/listaCarrito');
            }

    
            // Insertamos los datos de todas las ventas en la tabla de videojuegosUsuario
            foreach ($ventasFinales as $venta) {
                // $ordenes->verificarYGuardar($ventas);
                $videojuegosUsuario->insert($venta);
            }

            //Aqui obtenemos el numero de ventas del arreglo ventas
            $numeroDeVentas = count($ventas);
            //llamamos a la funcion para obtener los puntos ganados
            $puntosGanados = $videojuegosUsuario->calcularPuntos($numeroDeVentas);
            $clienteId = $_SESSION['datosUsuario'][0]['idUsuario'];
         
            //Verificar si ya existe un registro de puntos para este cliente
            $puntosExistentes = $puntos->where('idUsuario', $clienteId)->first();

            if ($puntosExistentes) {
                // Si existe, actualizar el registro con los nuevos puntos ganados
                $puntosNuevos = $puntosExistentes['puntos'] + $puntosGanados;
                $puntos->update($puntosExistentes['idPuntos'], ['puntos' => $puntosNuevos]);
            } else {
                // Si no existe, crear un nuevo registro
                $puntos->insert(['idUsuario' => $clienteId, 'puntos' => $puntosGanados]);
            }

            // Eliminamos el carrito de la sesión
            unset($_SESSION['cart']);
  
            return redirect()->to('usuario/listaCarrito');

        }
        else{
            //Mostrar mensaje de que no hay en el carrito cosas
            $session = session();
            $session->setFlashdata('SinCompras', 'No hay ningun videojuego agregado al carrito');
            return redirect()->to('usuario/listaCarrito');
        }

      
    }

    //Funcion para eliminar productos del carrito
    public function vaciarCarrito(){

        session_start();

        if(isset($_SESSION['cart'])){
            unset($_SESSION['cart']);
            $session = session();
            $session->setFlashdata('vaciarCarrito', 'Ya no hay mas juegos en tu carrito');
            return redirect()->to('usuario/listaCarrito');

        }else{
            //Mostrar mensaje de que no hay en el carrito cosas
            $session = session();
            $session->setFlashdata('SinCompras', 'No hay ningun videojuego agregado al carrito');
            return redirect()->to('usuario/listaCarrito');
        }
    }

    public function eliminarIndividualDelCarrito(){
        session_start();
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $key => $value)
            {
            
                if($value['nombre']==$_POST['nombre'])
                {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    $session = session();
                    $session->setFlashdata('seEliminoIndividual', 'Se elimino correctamente');
                    
                    return redirect()->to('usuario/listaCarrito');
                } 
            }
        }
        
    }

  
}