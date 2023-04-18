<?php
namespace App\Models\admin;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class RegistrarAdmin extends Model
{
        protected $table = 'administradores';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['nombre','apellidos','correoElectronico','telefono','direccion','contrasenia'];
}

