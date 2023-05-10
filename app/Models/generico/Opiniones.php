<?php
namespace App\Models\generico;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class Opiniones extends Model
{
        protected $table = 'opiniones';
        protected $primaryKey = 'idOpinion';
        protected $returnType = 'array';
        protected $allowedFields = ['titulo','descripcion','usuario'];     
}
