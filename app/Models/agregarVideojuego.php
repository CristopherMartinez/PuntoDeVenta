<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

class agregarVideojuego extends Model
{
        protected $table = 'videojuego';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['idProveedor','nombre','descripcion','precio','cantidadInventario','idCategoria','idConsola'];     

}