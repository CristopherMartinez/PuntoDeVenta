<?php
namespace App\Models\generico;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class Membresias extends Model
{
        protected $table = 'membresia';
        protected $primaryKey = 'idMembresia';
        protected $returnType = 'array';
        protected $allowedFields = ['idMembresia','nombre','descripcion','precio','html'];     
}
