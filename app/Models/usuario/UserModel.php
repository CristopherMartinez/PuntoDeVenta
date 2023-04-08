<?php

namespace App\Models\usuario;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'idUsuario';
    protected $allowedFields = ['usuario','nombre','apellidos','correo','direccion','telefono','contrasenia'];

	function get_email($email) {
		$row = $this->db->table($this->table)->where('usuario.correo',$email)->get()->getRow();
		if ($row) {
			return true;
		}
		return false;
	}
}