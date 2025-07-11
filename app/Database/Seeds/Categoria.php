<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categoria extends Seeder
{
    public function run()
    {
        $data = [
            ['nombre' => 'ropa'],
            ['nombre' => 'television'],
            ['nombre' => 'radio'],
            ['nombre' => 'deportes'],
            ['nombre' => 'computadora'],
            ['nombre' => 'carros'],
            ['nombre' => 'cama'],
        ];

        // Simple Queries

        $this->db->table('categorias')->insertBatch($data);

    }
}
