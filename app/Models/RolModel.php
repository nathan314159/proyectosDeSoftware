<?php

namespace App\Models;

use CodeIgniter\Model;

class RolModel extends Model
{
    protected $table = 'tbl_rol';
    protected $primaryKey = 'id_rol';
    protected $allowedFields = ['rol_nombre'];

    public function showRols()
    {
        $builder = $this->select("id_rol, rol_nombre");
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function insertRoles($data)
    {
        $this->insert($data);
        return $this->where('users_cedula', $data['users_cedula'])->first();
    }
}
