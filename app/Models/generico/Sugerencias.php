<?php
namespace App\Models\generico;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class Sugerencias extends Model
{
        protected $table = 'sugerencias';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['nombre','correo','comentarios'];
        
}
