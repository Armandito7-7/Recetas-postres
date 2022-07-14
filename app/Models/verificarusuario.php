<?php

namespace App\Models;

use CodeIgniter\Model;

class verificarusuario extends Model
{
    public function obtenerUsurio($data) {
       $Usuario = $this->db->table('usuarios');
       $Usuario->where($data);
       return $Usuario->get()->getResultArray();
    }
}
