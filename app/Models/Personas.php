<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
USE CodeIgniter\Model;

// use CodeIgniter\Controller;

class Personas extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['nombre','direccion','correo','id'];
    
    public function traer_personas(){
        $query=$this->db->query("SELECT nombre,direccion,correo,id FROM personas");
        //Segundo metodo
        return $query->getResultArray();
    }

}

