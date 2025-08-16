<?php

namespace App\Models;

use CodeIgniter\Model;

class RolModel extends Model
{
    protected $table = 'tbl_rol';
    protected $primaryKey = 'id_rol';
    protected $allowedFields = ['rol_nombre', 'rol_estado', 'rol_created_at'];



    public function showRols()
    {
        return $this->select("id_rol, rol_nombre, rol_estado")
            ->findAll(); // trae todos (activos e inactivos)
    }

    public function showActiveRols()
    {
        return $this->select('id_rol, rol_nombre, rol_estado')
            ->where('rol_estado', 1) // solo activos
            ->findAll();
    }

    public function insertRoles($data)
    {
        $rolInsert = $this->insert($data);
        return $rolInsert;
        // return $this->where('users_cedula', $data['users_cedula'])->first();
    }

    public function deleteRols($estado, $id)
    {
        return $this->db->table('tbl_rol')
            ->where('id_rol', $id)
            ->update(['rol_estado' => $estado]);
    }

    public function updateRols($data, $id)
    {
        return $this->db->table('tbl_rol')
            ->where('id_rol', $id)
            ->update($data);
    }
}
