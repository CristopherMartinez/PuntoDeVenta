<?php
namespace App\Controllers\generico;
// use CodeIgniter\Controller;
use App\Models\Videojuegos;
use App\Controllers\BaseController;

//GamesPlayStation5
class GamesplayStation extends BaseController{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    
    //Invitado
    public function index(){
        
        //$data=['titulo'=>'Videojuegos PS5'];
         $videojuegos = new Videojuegos();
         $data2["videojuegos"]=$videojuegos->getAllVideogamesPlayStation();

        $vista= view('genericos/header').
                view('invitado/navbarInvitado').
                view('genericos/gamesplayStation',$data2);
        

        return $vista;
    }


     //Metodo para pintar en vista de perfil logueado  //Usuario
     public function indexLog(){

                    
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

        $videojuegos = new Videojuegos();
         
        $data2["videojuegosPlayStation"]=$videojuegos->get10VideogamesPlayStation();
        $consolas['consolasPlayStation']=$videojuegos->getConsolasPlayStation();

         //Agregar el idConsola y tambien 
        //PlayStation 3
        $cantidadjuegosPlayStation3 = [
            (object) ['identificador' => 'PlayStation 3', 'valor' => $videojuegos->getTotalGamesPlayStation3(),'idConsola'=>'1'],
        ];
 
        $cantidadPorGeneroPlayStation3 = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura PlayStation 3', 'valor' => $videojuegos->TotalGamesAventuraPlayStation3(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade PlayStation 3', 'valor' => $videojuegos->TotalGamesArcadePlayStation3(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes PlayStation 3', 'valor' => $videojuegos->TotalGamesDeportesPlayStation3(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror PlayStation 3', 'valor' => $videojuegos->TotalGamesTerrorPlayStation3(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia PlayStation 3', 'valor' => $videojuegos->TotalGamesEstrategiaPlayStation3(),'idCategoria'=>'5'],
        ];

        //PlayStation 4
        $CantidadPlayStation4 = [
             (object) ['identificador' => 'PlayStation 4', 'valor' => $videojuegos->getTotalGamesPlayStation4(),'idConsola'=>'2'],
        ];

        //CANTIDAD POR GENERO PlayStation 4
        $CantidadGeneroPlayStation4 = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura PlayStation 4', 'valor' => $videojuegos->TotalGamesAventuraPlayStation4(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade PlayStation 4', 'valor' => $videojuegos->TotalGamesArcadePlayStation4(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes PlayStation 4', 'valor' => $videojuegos->TotalGamesDeportesPlayStation4(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror PlayStation 4', 'valor' => $videojuegos->TotalGamesTerrorPlayStation4(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia PlayStation 4', 'valor' => $videojuegos->TotalGamesEstrategiaPlayStation4(),'idCategoria'=>'5'],
        ];

        //PlayStation 5
        $CantidadPlayStation5 = [
            (object) ['identificador' => 'PlayStation 5', 'valor' => $videojuegos->getTotalGamesPlayStation5(),'idConsola'=>'3'],
        ];
        $CantidadGeneroPlayStation5 = [
            //Cantidad de juegos de Aventura 
            (object) ['identificador' => 'Aventura PlayStation 5', 'valor' => $videojuegos->TotalGamesAventuraPlayStation5(),'idCategoria'=>'1'],
            //Cantidad de juegos Arcade
            (object) ['identificador' => 'Arcade PlayStation 5', 'valor' => $videojuegos->TotalGamesArcadePlayStation5(),'idCategoria'=>'2'],
            //Cantidad de juegos Deportes
            (object) ['identificador' => 'Deportes PlayStation 5', 'valor' => $videojuegos->TotalGamesDeportesPlayStation5(),'idCategoria'=>'3'],
            //Cantidad de juegos Terror
            (object) ['identificador' => 'Terror PlayStation 5', 'valor' => $videojuegos->TotalGamesTerrorPlayStation5(),'idCategoria'=>'4'],
            //Cantidad de juegos Estrategia
            (object) ['identificador' => 'Estrategia PlayStation 5', 'valor' => $videojuegos->TotalGamesEstrategiaPlayStation5(),'idCategoria'=>'5'],
        ];

        


        $data =  array(
            'videojuegosPlayStation' => $videojuegos->getAllVideogamesPlayStation(),
            'consolasPlayStation' => $videojuegos->getConsolasPlayStation(),
            'categorias' => $videojuegos->getCategoria(),
            //PlayStation 3
            'listaVideojuegos'=>$cantidadjuegosPlayStation3,
            'totalGAventuraPlayStation3'=>$cantidadPorGeneroPlayStation3,
            //PlayStation 4
            'PlayStation4'=>$CantidadPlayStation4,
            'CantGeneroPlayStation4'=>$CantidadGeneroPlayStation4,
            //PlayStation 5
            'PlayStation5'=>$CantidadPlayStation5,
            'CantGeneroPlayStation5'=>$CantidadGeneroPlayStation5

    
        );

        $vista= view('genericos/header').
                view('usuario/navbarLog',$usuario).
                view('usuario/gamesPlayStation',$data);
        

        return $vista;
    }
   
    // public function indexLog(){

    //     //  $videojuegos = new Videojuegos();
    //     //  $data2["videojuegos"]=$videojuegos->getAllVideogamesPlayStation();



    //     $vista= view('genericos/header').
    //             // view('usuario/navbarLog').
    //             view('usuario/gamesPlayStation');
        

    //     return $vista;
    // }
    



    

}