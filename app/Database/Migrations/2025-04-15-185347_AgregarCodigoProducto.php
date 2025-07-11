<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarCodigoProducto extends Migration
{
    public function up()
    {
        $field = [
            "codigo" => [
                "type" => "VARCHAR",
                "constraint" => 10,
                "after" => "id",
            ],
        ];
        $this->forge->addColumn('producto', $field);
    }
        

    public function down()
    {
        $this->forge->dropColumn("producto", "codigo");
    }
}
