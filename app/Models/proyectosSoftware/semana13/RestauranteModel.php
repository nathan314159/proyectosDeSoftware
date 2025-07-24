<?php

namespace App\Models\proyectosSoftware\semana13;

use CodeIgniter\Model;

class RestauranteModel extends Model
{
    protected $table      = 'tbl_restaurante';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'ubicacion', 'tipo_cocina'];
    protected $useTimestamps = false;
}
