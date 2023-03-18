<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

class Videojuegos extends Model
{
    protected $table = 'videojuego';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['nombre','descripcion','imagen','precio','cantidadInventario','idCategoria','idConsola'];
    
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
        $query = $this->db->query("SELECT nombre, descripcion, imagen, precio, cantidadInventario FROM videojuego WHERE idConsola IN (1, 2, 3) LIMIT 10");
        return $query->getResultArray();
    }

    public function get10VideogamesXBOX(){
        $query = $this->db->query("SELECT nombre, descripcion, imagen, precio, cantidadInventario FROM videojuego LIMIT 10");
        return $query->getResultArray();
    }

    public function get10VideogamesNintendo(){
        $query = $this->db->query("SELECT nombre, descripcion, imagen, precio, cantidadInventario FROM videojuego LIMIT 10");
        return $query->getResultArray();
    }

    //Funcion para traer todos los videojuegos para mostrar en modo Admin
    public function getAllVideogames(){
        $query=$this->db->query("SELECT nombre,descripcion,imagen,precio,cantidadInventario FROM videojuego");
        return $query->getResultArray();
    }

    public function getProveedores(){
        $query=$this->db->query("SELECT nombre FROM proveedor");                      
        return $query->getResultArray();
    }

    public function getCategoria(){
        $query=$this->db->query("SELECT idCategoria,nombre FROM categoria");                      
        return $query->getResultArray();
    }

    public function getConsolas(){
        $query=$this->db->query("SELECT nombre FROM consola");                      
        return $query->getResultArray();
    }

    public function getIdProveedor($nombre){
        $query = $this->db->query("SELECT idProveedor FROM proveedor WHERE nombre = ?", [$nombre]);
        $result = $query->getRow();
        return $result ? (int) $result->idProveedor : 0;
    }

    public function getIdCategoria($nombre){
        $query = $this->db->query("SELECT idCategoria FROM categoria WHERE nombre = ?", [$nombre]);
        $result = $query->getRow();
        return $result ? (int) $result->idCategoria : 0;
    }

    public function getIdConsola($nombre){
        $query = $this->db->query("SELECT idConsola FROM consola WHERE nombre = ?", [$nombre]);
        $result = $query->getRow();
        return $result ? (int) $result->idConsola : 0;
    }


}
