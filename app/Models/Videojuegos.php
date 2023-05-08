<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

class Videojuegos extends Model
{
    protected $table = 'videojuego';
    protected $primaryKey = 'idVideojuego';
    protected $returnType = 'array';
    protected $allowedFields = ['idVideojuego','nombre','descripcion','imagen','precio','cantidadInventario','idCategoria','idConsola'];
    
    //Para traer los videojuegos de PS5
    public function getVideogamesAventPS5(){
        $query=$this->db->query("SELECT nombre,descripcion,imagen,precio,cantidadInventario 
                                 FROM videojuego WHERE idCategoria = '1' AND idConsola = '3'");
        //Segundo metodo
        return $query->getResultArray();
    }

    //Obtener videojuegos dependiendo del genero, le vamos a pasar mediante id
    public function getVideogames($genero){
        $idGenero = $genero; //Aca vamos a poner la consulta para obtener el id Genero y lo igualamos para poder usar el case
        switch($idGenero){
            case 1 : $query=$this->db->query("SELECT nombre,descripcion,imagen,precio,cantidadInventario 
                     FROM videojuego WHERE idCategoria = '1' AND idConsola = '3'");
                     return $query->getResultArray();
                break;
            case 2:  $query=$this->db->query("SELECT nombre,descripcion,imagen,precio,cantidadInventario 
                     FROM videojuego WHERE idCategoria = '1' AND idConsola = '3'");
                     return $query->getResultArray();
                break;
        }
    }
    //Obtenemos los primeros 10 videojuegos de PlayStation Especificando los id de Consolas para mostrar en gamesplayStation 
    public function get10VideogamesPlay(){
        $query = $this->db->query("SELECT idVideojuego,nombre, descripcion, imagen, precio, cantidadInventario FROM videojuego WHERE idConsola IN (1, 2, 3) LIMIT 10");
        return $query->getResultArray();
    }
    // public function get10VideogamesPlay(){
    //     $query = $this->db->query("SELECT idVideojuego,nombre, descripcion, imagen, precio, cantidadInventario FROM videojuego WHERE idConsola IN (1, 2, 3) LIMIT 10");
    //     return $query->getResultArray();
    // }

    //Obtenemos los primeros 10 videojuegos de PlayStation Especificando los id de Consolas para mostrar en gamesplayStation 
    public function getVideogamesCartInicio(){
        $query = $this->db->query("SELECT v.idVideojuego, v.nombre, v.descripcion, v.imagen, v.precio, v.cantidadInventario,v.idConsola,v.idCategoria, c.nombre as nombreConsola 
            FROM videojuego v 
            INNER JOIN consola c ON v.idConsola = c.idConsola 
            WHERE v.idConsola IN (1, 2, 3) LIMIT 10");
        return $query->getResultArray();
    }

    //---------------------------------------------------
    
    // METODOS XBOX ONE X

    //Total de juegos de XboxOneX
    public function getTotalGamesXboxOneX(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '5'");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
     //Total de juegos de aventura de Xbox One X
     public function TotalGamesAventuraXboxX(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '5' AND idCategoria = '1'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //Total de juegos de Arcade de Xbox One X
    public function TotalGamesArcadeXboxX(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '5' AND idCategoria = '2'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    //Total de juegos de Deportes de Xbox One X
    public function TotalGamesDeportesXboxX(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '5' AND idCategoria = '3'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Terror de Xbox One X
    public function TotalGamesTerrorXboxX(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '5' AND idCategoria = '4'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Estrategia de Xbox One X
    public function TotalGamesEstrategiaXboxX(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '5' AND idCategoria = '5'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //-----------------------------------------------
    //METODOS XBOX ONE S

    //Total de juegos de XboxOneS
    public function getTotalGamesXboxOneS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '6'");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
      //Total de juegos de aventura de Xbox One S
    public function TotalGamesAventuraXBOXS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '6' AND idCategoria = '1'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //Total de juegos de Arcade de Xbox One S
    public function TotalGamesArcadeXBOXS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '6' AND idCategoria = '2'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    //Total de juegos de Deportes de Xbox One S
    public function TotalGamesDeportesXBOXS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '6' AND idCategoria = '3'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Terror de Xbox One S
    public function TotalGamesTerrorXBOXS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '6' AND idCategoria = '4'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Estrategia de Xbox One S
    public function TotalGamesEstrategiaXBOXS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '6' AND idCategoria = '5'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //--------------------------------------------------------------------------

    //METODOS XBOX ONE SERIES S

    //Total de juegos de XboxOneSS
    public function getTotalGamesXboxOneSS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '4'");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //Total de juegos de aventura de Xbox One Series S
    public function TotalGamesAventuraXBOXSS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '4' AND idCategoria = '1'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //Total de juegos de Arcade de Xbox One Series S
    public function TotalGamesArcadeXBOXSS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '4' AND idCategoria = '2'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    //Total de juegos de Deportes de Xbox One Series S
    public function TotalGamesDeportesXBOXSS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '4' AND idCategoria = '3'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Terror de Xbox One Series S
    public function TotalGamesTerrorXBOXSS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '4' AND idCategoria = '4'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Estrategia de Xbox One Series S
    public function TotalGamesEstrategiaXBOXSS(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '4' AND idCategoria = '5'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }


    //Funcion para obtener 10 videojuegos de Xbox
    public function get10VideogamesXBOX(){
        $query = $this->db->query("SELECT idVideojuego,nombre, descripcion, imagen, precio, cantidadInventario,idConsola,idCategoria FROM videojuego WHERE idConsola IN (4, 5, 6) LIMIT 10");
        return $query->getResultArray();
    }

    //Funcion para obtener todos los videojuegos de Xbox
    public function getAllVideogamesXbox(){
        $query = $this->db->query("SELECT v.idVideojuego, v.nombre, v.descripcion, v.imagen, v.precio, v.cantidadInventario,v.idConsola,v.idCategoria, c.nombre as nombreConsola 
            FROM videojuego v 
            INNER JOIN consola c ON v.idConsola = c.idConsola 
            WHERE v.idConsola IN (4, 5, 6)");
        return $query->getResultArray();
    }

    //Funcion para obtener todos los videojuegos de PlayStation
    public function getAllVideogamesPlayStation(){
        $query = $this->db->query("SELECT v.idVideojuego, v.nombre, v.descripcion, v.imagen, v.precio, v.cantidadInventario,v.idConsola,v.idCategoria, c.nombre as nombreConsola 
            FROM videojuego v 
            INNER JOIN consola c ON v.idConsola = c.idConsola 
            WHERE v.idConsola IN (1, 2, 3)");
        return $query->getResultArray();
    }
    

    public function getConsolasXbox(){
        $query=$this->db->query("SELECT nombre FROM consola WHERE idConsola IN (4, 5, 6)");                      
        return $query->getResultArray();
    }

     //Funcion para traer todos los videojuegos para mostrar en modo Admin
     public function getAllVideogames(){
        $query=$this->db->query("SELECT v.idVideojuego, v.nombre, v.descripcion, v.imagen, v.precio, v.cantidadInventario, c.nombre as consola
        FROM videojuego v
        INNER JOIN consola c ON v.idConsola = c.idConsola
        ");
        return $query->getResultArray();
    }

    //Funcion para obtener los proveedores
    public function getProveedores(){
        $query=$this->db->query("SELECT nombre FROM proveedor");                      
        return $query->getResultArray();
    }

    //Funcion para obtener Categorias
    public function getCategoria(){
        $query=$this->db->query("SELECT idCategoria,nombre FROM categoria");                      
        return $query->getResultArray();
    }

    //Funcion para obtener Consolas
    public function getConsolas(){
        $query=$this->db->query("SELECT nombre FROM consola");                      
        return $query->getResultArray();
    }

    //Funcion para obtener el id del proveedor pasando como parametro el nombre
    public function getIdProveedor($nombre){
        $query = $this->db->query("SELECT idProveedor FROM proveedor WHERE nombre = ?", [$nombre]);
        $result = $query->getRow();
        return $result ? (int) $result->idProveedor : 0;
    }

    //Funcion para obtener el id de la categoria pasando como parametro el nombre
    public function getIdCategoria($nombre){
        $query = $this->db->query("SELECT idCategoria FROM categoria WHERE nombre = ?", [$nombre]);
        $result = $query->getRow();
        return $result ? (int) $result->idCategoria : 0;
    }

     //Funcion para obtener el id de la consola pasando como parametro el nombre
    public function getIdConsola($nombre){
        $query = $this->db->query("SELECT idConsola FROM consola WHERE nombre = ?", [$nombre]);
        $result = $query->getRow();
        return $result ? (int) $result->idConsola : 0;
    }

     //Funcion para obtener el nombre de consola con el idConsola
    public function getNombreConsola($idConsola){
        $query = $this->db->query("SELECT nombre FROM consola WHERE idConsola = ?", [$idConsola]);
        $result = $query->getRow();
        return $result ? $result->nombre : '';
    }

    //Funcion para obtener el nombre de proveedor con el idProveedor
    public function getProveedorWithId($idProveedor){
        $query = $this->db->query("SELECT nombre FROM proveedor WHERE idProveedor = ?", [$idProveedor]);
        $result = $query->getRow();
        return $result ? $result->nombre : '';
    }
    //Funcion para obtener el nombre de categoria con el idCategoria
    public function getCategoriaWithId($idCategoria){
        $query = $this->db->query("SELECT nombre FROM categoria WHERE idCategoria = ?", [$idCategoria]);
        $result = $query->getRow();
        return $result ? $result->nombre : '';
    }


    
// METODOS PlayStation 3

    //Total de juegos de PlayStation 3
    public function getTotalGamesPlayStation3(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '1'");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
     //Total de juegos de aventura de PlayStation 3
     public function TotalGamesAventuraPlayStation3(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '1' AND idCategoria = '1'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //Total de juegos de Arcade de PlayStation 3
    public function TotalGamesArcadePlayStation3(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '1' AND idCategoria = '2'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    //Total de juegos de Deportes de PlayStation 3
    public function TotalGamesDeportesPlayStation3(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '1' AND idCategoria = '3'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Terror de PlayStation3
    public function TotalGamesTerrorPlayStation3(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '1' AND idCategoria = '4'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Estrategia de PlayStation 3
    public function TotalGamesEstrategiaPlayStation3(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '1' AND idCategoria = '5'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //-----------------------------------------------
    //METODOS PlayStation 4

    //Total de juegos de Playstation 4
    public function getTotalGamesPlayStation4(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '2'");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
      //Total de juegos de aventura de Playstation 4
    public function TotalGamesAventuraPlayStation4(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '2' AND idCategoria = '1'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //Total de juegos de Arcade de Playstation 4
    public function TotalGamesArcadePlayStation4(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '2' AND idCategoria = '2'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    //Total de juegos de Deportes de Playstation 4
    public function TotalGamesDeportesPlayStation4(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '2' AND idCategoria = '3'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Terror de Playstation 4
    public function TotalGamesTerrorPlayStation4(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '2' AND idCategoria = '4'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Estrategia de Playstation 4
    public function TotalGamesEstrategiaPlayStation4(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '2' AND idCategoria = '5'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //--------------------------------------------------------------------------

    //METODOS PlayStation 5

    //Total de juegos de PlayStation 5
    public function getTotalGamesPlayStation5(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '3'");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //Total de juegos de aventura de PlayStation 5
    public function TotalGamesAventuraPlayStation5(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '3' AND idCategoria = '1'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //Total de juegos de Arcade de PlayStation 5
    public function TotalGamesArcadePlayStation5(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '3' AND idCategoria = '2'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    //Total de juegos de Deportes de PlayStation 5
    public function TotalGamesDeportesPlayStation5(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '3' AND idCategoria = '3'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Terror de PlayStation 5
    public function TotalGamesTerrorPlayStation5(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '3' AND idCategoria = '4'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Estrategia de PlayStation 5
    public function TotalGamesEstrategiaPlayStation5(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '3' AND idCategoria = '5'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }


    //Funcion para obtener 10 videojuegos de PlayStation
    public function get10VideogamesPlayStation(){
        $query = $this->db->query("SELECT idVideojuego,nombre, descripcion, imagen, precio, cantidadInventario,idConsola,idCategoria FROM videojuego WHERE idConsola IN (1, 2, 3) LIMIT 10");
        return $query->getResultArray();
    }

    // //Funcion para obtener todos los videojuegos de PlayStation
    // public function getAllVideogamesPlayStation(){
    //     $query = $this->db->query("SELECT v.idVideojuego, v.nombre, v.descripcion, v.imagen, v.precio, v.cantidadInventario,v.idConsola,v.idCategoria, c.nombre as nombreConsola 
    //         FROM videojuego v 
    //         INNER JOIN consola c ON v.idConsola = c.idConsola 
    //         WHERE v.idConsola IN (1, 2, 3)");
    //     return $query->getResultArray();
    // }

    

    public function getConsolasPlayStation(){
        $query=$this->db->query("SELECT nombre FROM consola WHERE idConsola IN (1, 2, 3)");                      
        return $query->getResultArray();
    }

//---------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------

    //METODOS Nintendo

    //Total de juegos de Nintendo
    public function getTotalGamesNintendo(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '7'");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //Total de juegos de aventura de Nintendo
    public function TotalGamesAventuraNintendo(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '7' AND idCategoria = '1'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }

    //Total de juegos de Arcade de Nintendo
    public function TotalGamesArcadeNintendo(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '7' AND idCategoria = '2'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    //Total de juegos de Deportes de Nintendo
    public function TotalGamesDeportesNintendo(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '7' AND idCategoria = '3'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Terror de Nintendo
    public function TotalGamesTerrorNintendo(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '7' AND idCategoria = '4'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }
    // //Total de juegos de Estrategia de Nintendo
    public function TotalGamesEstrategiaNintendo(){
        $query=$this->db->query("SELECT COUNT(*) as numJuegos
                                 FROM videojuego 
                                 WHERE idConsola = '7' AND idCategoria = '5'
                                 ");
        $result = $query->getRow();
        return $result ? (int) $result->numJuegos : 0;
    }


    //Funcion para obtener 10 videojuegos de Nintendo
    public function get10VideogamesNintendo(){
        $query = $this->db->query("SELECT idVideojuego,nombre, descripcion, imagen, precio, cantidadInventario,idConsola,idCategoria FROM videojuego WHERE idConsola IN (7) LIMIT 10");
        return $query->getResultArray();
    }

    //Funcion para obtener todos los videojuegos de Nintendo
    public function getAllVideogamesNintendo(){
        $query = $this->db->query("SELECT v.idVideojuego, v.nombre, v.descripcion, v.imagen, v.precio, v.cantidadInventario,v.idConsola,v.idCategoria, c.nombre as nombreConsola 
            FROM videojuego v 
            INNER JOIN consola c ON v.idConsola = c.idConsola 
            WHERE v.idConsola IN (7)");
        return $query->getResultArray();
    }
   

    public function getConsolasNintendo(){
        $query=$this->db->query("SELECT nombre FROM consola WHERE idConsola IN (7)");                      
        return $query->getResultArray();
    }
//----------------------------------------------------------------------------------------------------------

    


}
