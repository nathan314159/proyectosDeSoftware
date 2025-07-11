<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarModificarCodigoProduto extends Migration
{
    public function up()
    {
        $field = [
            "codigo" => [
                "type" => "VARCHAR",
                "constraint" => 10,
                "after" => "id",
                "null" => false
                
            ],
        ];
        $this->forge->modifyColumn('producto', $field);
    }
        

    public function down()
    {
        $field = [
            "codigo" => [
                "type" => "VARCHAR",
                "constraint" => 10,
                "after" => "id",
                "null" => true
                
            ],
        ];
        $this->forge->modifyColumn('producto', $field);
    }
}
