<?php
namespace App\Models\usuario;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class VideojuegosUsuario extends Model
{
        protected $table = 'videojuegosusuario';
        protected $primaryKey = 'idVidUsuario';
        protected $returnType = 'array';
        protected $allowedFields = ['idVidUsuario','idVideojuego','usuario','nombreVideojuego','consola','precio','imagen'];
        
}
