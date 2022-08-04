<?php

namespace App\Models;

use CodeIgniter\Model;

class contador extends Model
{
    public function contarusuarios() {
        $contar = $this->db->table('usuarios');
        $usuarios = $contar->countAll();
        return $usuarios;
     }

     public function contarrecetas() {
        $contar = $this->db->table('recetas');
        $recetas = $contar->countAll();
        return $recetas;
     }




}