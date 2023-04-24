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
    public function getVideogamesCartTest(){
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

    


}
