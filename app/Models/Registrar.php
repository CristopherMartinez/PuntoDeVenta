<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class Registrar extends Model
{
        protected $table = 'personas';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['nombre','direccion','correo'];
        
}

