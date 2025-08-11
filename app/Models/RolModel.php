<?php

namespace App\Models;

use CodeIgniter\Model;

class RolModel extends Model
{
    protected $table = 'tbl_rol';
    protected $primaryKey = 'id_rol';
    protected $allowedFields = ['rol_nombre, rol_estado, rol_created_at'];



    public function showRols()
    {
        $builder = $this->select("id_rol, rol_nombre");
        $query = $builder->get();
        return $query->getResultArray();
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
}
