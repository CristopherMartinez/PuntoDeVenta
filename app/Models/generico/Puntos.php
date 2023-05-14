<?php
namespace App\Models\generico;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class Puntos extends Model
{
        protected $table = 'puntos';
        protected $primaryKey = 'idPuntos';
        protected $returnType = 'array';
        protected $allowedFields = ['idPuntos','idUsuario','puntos'];     


}
