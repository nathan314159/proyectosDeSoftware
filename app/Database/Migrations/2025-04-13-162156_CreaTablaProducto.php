<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreaTablaProducto extends Migration
{
    public function up()
    {
        //id, codigo, nombre, stock, id_almacen, status,fecha_alta, fecha_modifica, fecha_elimina
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'stock' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'id_almacen' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'fecha_alta' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'fecha_modifica' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'fecha_elimina' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        
        // Definir la clave foránea
        $this->forge->addForeignKey(
            'id_almacen',    // columna en la tabla actual (producto)
            'almacen',       // tabla a la que hace referencia
            'id',            // columna de la tabla relacionada
            'CASCADE',       // acción al eliminar o actualizar (opcional, puedes usar "RESTRICT" si prefieres evitar cambios en la relación)
            'CASCADE'        // acción en caso de que se elimine la fila referenciada
        );
        $this->forge->addKey('id', true);
        $this->forge->createTable('producto');
        
    }

    public function down()
    {
        $this->forge->dropTable('producto');
    }
}
