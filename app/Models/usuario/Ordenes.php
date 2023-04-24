<?php
namespace App\Models\usuario;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class Ordenes extends Model
{
        protected $table = 'ordenes';
        protected $primaryKey = 'idOrden';
        protected $returnType = 'array';
        protected $allowedFields = ['idOrden','nombre','apellidos','numeroTarjeta','direccion','fechaVencimiento','cvv'];
        
        
}

