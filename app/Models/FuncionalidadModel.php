<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionalidadModel extends Model
{
    protected $table      = 'tbl_funcionalidad';
    protected $primaryKey = 'id_funcionalidad';

    // Campos permitidos para insertar/actualizar
    protected $allowedFields = [
        'funcionalidad_nombre_funcion',
        'funcionalidad_url',
        'funcionalidad_estado'
    ];

    public function insertFunctionality($data)
    {
        return $this->insert($data);
    }

    public function showfunctions()
    {
        $builder = $this->select(
            "
        id_funcionalidad,
        funcionalidad_nombre_funcion, 
        funcionalidad_url, 
        funcionalidad_estado"
        );
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function deleteFuncitonality($estado, $id)
    {
        return $this->db->table('tbl_funcionalidad')
            ->where('id_funcionalidad', $id)
            ->update(['funcionalidad_estado' => $estado]);
    }
}
