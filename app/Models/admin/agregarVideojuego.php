<?php
namespace App\Models\admin;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

class agregarVideojuego extends Model
{
        protected $table = 'videojuego';
        protected $primaryKey = 'idVideojuego';
        protected $returnType = 'array';
        protected $allowedFields = ['idProveedor','nombre','descripcion','precio','cantidadInventario','idCategoria','idConsola',"imagen"];   
}