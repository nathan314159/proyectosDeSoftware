<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregaPrecioProductos extends Migration
{
    public function up()
    {
        $campo = [
            "precio" => [
            "type" => "DECIMAL",
            "constraint" => '10,2',
            "after" => "nombre",
            'null' => false
            ]
        ];
        $this->forge->addColumn('producto', $campo);
    }

    public function down()
    {
        $this->forge->dropColumn('producto', 'precio');
    }
}
