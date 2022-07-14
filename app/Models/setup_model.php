<?php

namespace App\Models;

use CodeIgniter\Model;

class setup_model extends Model
{
    public function __construct(){}

    public function crearDatabaseRecetario(){
        echo __FUNCTION__;

        $forge = \Config\Database::forge();
//creamos primero todas las tablas

$t_categoria = [
    'id_categoria' => [
        'type'           => 'INT',
        'constraint'     => 10,
        'auto_increment' => true,
    ],
    'nombre_categoria' => [
        'type'       => 'VARCHAR',
        'constraint' => '50',
        'unique'     => true,
    ]
];
//tabla de usuarios
        $t_usuarios = [
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 4,
                'auto_increment' => true,
            ],
            'nombre_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'ap_paterno_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
               
            ],
            'ap_materno_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
               
            ],
            'sexo_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 1,
               
            ],
            'rol_usuario' => [
                'type'       => 'INT',
                'constraint' => 3,
               
            ],
            'email_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 70,
               
            ],
            'password_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 64,
               
            ],
            'ruta_imagen' => [
                'type' => 'LONGBLOB',

            ],
            'telefono' => [
                'type'       => 'INT',
                'constraint' => 20,
            ]
        ];
//tabla para recetas
$t_recetas = [
    'id_receta' => [
        'type'           => 'INT',
        'constraint'     => 11,
        'auto_increment' => true,
    ],
    'nombre_receta' => [
        'type'       => 'VARCHAR',
        'constraint' => '50',
    ],
    'id_categoria' => [
        'type'           => 'INT',
        'constraint'     => 10,
    ],
    'id_usuario' => [
        'type'           => 'INT',
        'constraint'     => 4,
    ],
    'ruta_imagen' => [
        'type' => 'LONGBLOB',  
    ],
    'ingredientes' => [
        'type'       => 'TEXT',
    ],
    'preparacion' => [
        'type'       => 'TEXT',
    ],
    'tiempo' => [
        'type'           => 'INT',
        'constraint'     => 20,
    ]
];


//termina todas las tablas que se crean
//mandamos la primera tabla de categorias
$forge->addField($t_categoria);
$forge->addPrimarykey('id_categoria');
$forge->createTable('categorias', true);

//mandamos la segunda tabla de usuarios
$forge->addField($t_usuarios);
$forge->addPrimarykey('id_usuario');
$forge->createTable('usuarios', true);

$forge->addField($t_recetas);
$forge->addPrimarykey('id_receta');
$forge->addForeignKey('id_categoria', 'categorias', 'id_categoria', 'CASCADE', 'CASCADE');
$forge->addForeignKey('id_usuario', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
$forge->createTable('recetas', true);

echo '<br>se crearon las tablas CATEGORIAS, USUARIOS, RECETAS';
    }

    public function limpiarBDRecetarioTablas(){
        echo __FUNCTION__;

        $forge = \Config\Database::forge();
        $forge->dropTable('categorias', false);
        $forge->dropTable('usuarios', false);
        $forge->dropTable('recetas', false);
        echo '<br>se eliminaron todas las tablas de la base de datos';
    }



    public function limpiarBDRecetarioRegistros(){
        echo __FUNCTION__;
        $db = \Config\Database::connect();
        $builder = $db->table('categorias');
        $builder->emptyTable('categorias');
        echo '<br>se eliminaron todos los registros de la tabla categorias';
        $builder = $db->table('usuarios');
        $builder->emptyTable('usuarios');
        echo '<br>se eliminaron todos los registros de la tabla usuarios';
        $builder = $db->table('recetas');
        $builder->emptyTable('recetas');
        echo '<br>se eliminaron todos los registros de la tabla recetas';
    }
}