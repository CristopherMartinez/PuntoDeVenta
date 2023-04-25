<?php
namespace App\Models\usuario;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class OrdenesUsuario extends Model
{
        protected $table = 'ordenesusuario';
        protected $primaryKey = 'idOrden';
        protected $returnType = 'array';
        protected $allowedFields = ['idOrden','idVideojuego','nombre','consola','precio','cantidad'];
        
        
}

