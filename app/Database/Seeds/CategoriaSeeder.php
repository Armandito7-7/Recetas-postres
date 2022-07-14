<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
       
        $data = [
            'id_categoria' => '1',
            'nombre_categoria'    => 'Postres de frutas',
        ];

        // Using Query Builder
        $this->db->table('categorias')->insert($data);

        $data = [
            'id_categoria' => '2',
            'nombre_categoria'    => 'Postres a base de lácteos',
        ];

        $this->db->table('categorias')->insert($data);

        $data = [
            'id_categoria' => '3',
            'nombre_categoria'    => 'Postres semifríos',
        ];

        $this->db->table('categorias')->insert($data);

        $data = [
            'id_categoria' => '4',
            'nombre_categoria'    => 'Postres fríos',
        ];

        $this->db->table('categorias')->insert($data);

        $data = [
            'id_categoria' => '5',
            'nombre_categoria'    => 'Postres calientes',
        ];

        $this->db->table('categorias')->insert($data);

        $data = [
            'id_categoria' => '6',
            'nombre_categoria'    => 'Postres fritos',
        ];

        $this->db->table('categorias')->insert($data);

        $data = [
            'id_categoria' => '7',
            'nombre_categoria'    => 'Postres de huevo',
        ];

        $this->db->table('categorias')->insert($data);
    }
}