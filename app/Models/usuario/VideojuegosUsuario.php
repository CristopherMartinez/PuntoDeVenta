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
        
        //traer videojuegos por usuario
        public function getidsVideogames($usuario){
                        $query = $this->db->query("SELECT idVideojuego FROM videojuegosusuario WHERE usuario = ?", [$usuario]);
                        return $query->getResultArray();   
        }
        public function getVideogamesUser($usuario){
                $query = $this->db->query("SELECT idVideojuego,nombreVideojuego,consola,precio,imagen FROM videojuegosusuario WHERE usuario = ?", [$usuario]);
                return $query->getResultArray();   
        }

        //Funcion para calcular puntos recibiendo el numero de ventas y devolvemos los puntos
        public function calcularPuntos($ventas) {
                // Asignar 10 puntos por cada venta
                $puntos = $ventas * 10;
                return $puntos;
        }

        //Funcion que retorna los videojuegos a vender verificando los que ya se tienen
        public function videojuegosFinales($usuario, $juegos_a_vender) {
                $query = $this->db->query("SELECT idVideojuego FROM videojuegosusuario WHERE usuario = ?", [$usuario]);
                $juegos_comprados = array_column($query->getResultArray(), 'idVideojuego');
                
                $juegos_faltantes = array();
                foreach ($juegos_a_vender as $juego) {
                    if (!in_array($juego['idVideojuego'], $juegos_comprados)) {
                        $juegos_faltantes[] = $juego;
                    }
                }
                
                return $juegos_faltantes;
        }


        public function getPointsOfUser($idUsuario){
                $query = $this->db->query("SELECT puntos FROM puntos WHERE idUsuario = ?", [$idUsuario]);
                return $query->getResultArray();   

        }

        

     
            
            
        
}
