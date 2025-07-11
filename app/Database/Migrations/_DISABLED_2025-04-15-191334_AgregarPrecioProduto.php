<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarPrecioProduto extends Migration
{
    public function up()
    {
        $field = [
            'precio' => [
            'type' => 'DECIMAL', 
            "constraint" => '10,2',
            'after' => 'nombre',
            'null' => false,
            'default' => 0.0
            ],
        ];
        $this->forge->addColumn("producto", $field);
    }

    public function down()
    {
        $this->forge->dropColumn("producto", "precio");
    }
}
