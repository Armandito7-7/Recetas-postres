<?php

namespace App\Models;

use CodeIgniter\Model;

class crudmodel extends Model
{

//AQUI PARA MANDAR A LLAMAR LOS DATOS DE LA BASE DE DATOS 
    public function listarnombres() {
       $nombres = $this->db->query("SELECT * FROM usuarios");
       return $nombres->getResult();
    }

    public function listarrecetas() {
        $nombres = $this->db->query("SELECT * FROM recetas");
        return $nombres->getResult();
     }

     public function listarcategorias() {
        $nombres = $this->db->query("SELECT * FROM categorias");
        return $nombres->getResult();
     }
//AQUI PARA INSERTAR LOS DATOS DE LA BASE DE DATOS
    public function insertardatosusu($datos) {
        $nombres = $this->db->table('usuarios');
        $nombres->insert($datos);

        return $this->db->insertID();
    }
    public function insertardatosrecetas($datos) {
        $nombres = $this->db->table('recetas');
        $nombres->insert($datos);

        return $this->db->insertID();
    }
//AQUI PARA OBTENER NOMBRE DE LA BASE DE DATOS
    public function obtenernombreusu($data) {
        $nombres = $this->db->table('usuarios');
        $nombres->where($data);
        return $nombres->get()->getResultArray(); 
    }

    public function obtenernombrerecetas($data) {
        $nombres = $this->db->table('recetas');
        $nombres->where($data);
        return $nombres->get()->getResultArray(); 
    }

    public function obtenernombrecategoria($data) {
        $nombres = $this->db->table('categorias');
        $nombres->where($data);
        return $nombres->get()->getResultArray(); 
    }

    
    public function obtenerrecetaporcate($data) {
        $nombres = $this->db->table('recetas');
        $nombres->where($data);
        return $nombres->get()->getResult(); 
    }
//AQUI PARA ELIMINAR UN CAMPO DE LA BASE DE DATOS
    public function eliminarusu($data) {
        $nombres = $this->db->table('usuarios');
        $nombres->where($data);
        return $nombres->delete(); 
    }

    public function eliminarreceta($data) {
        $nombres = $this->db->table('recetas');
        $nombres->where($data);
        return $nombres->delete(); 
    }

    
//AQUI PARA ACTUALIZAR UN CAMPO DE LA BASE DE DATOS
    public function actulizarusu($data, $id) {
        $nombres = $this->db->table('usuarios');
        $nombres->set($data);
        $nombres->where('id_usuario',$id);
        return $nombres->update(); 
    }

    public function actulizarrece($data, $id) {
        $nombres = $this->db->table('recetas');
        $nombres->set($data);
        $nombres->where('id_receta',$id);
        return $nombres->update(); 
    }
}
