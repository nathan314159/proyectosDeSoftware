<?php

namespace App\Models;

use CodeIgniter\Model;


class UserRolModel extends Model
{
    protected $table      = 'tbl_user_rol';
    protected $primaryKey = 'id_users_rol';
    protected $allowedFields = ['id_users', 'id_rol', 'user_rol_estado', 'user_rol_created_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'user_rol_created_at';
    protected $updatedField  = ''; // <- Esto evita el uso de updated_at

    public function insertRol($data)
    {
        $insertarRol = $this->insert($data);
        return $insertarRol;
    }

    public function showRol()
    {
        $builder = $this->select("id_users, id_rol");
        $query = $builder->get();
        return $query->getResultArray();
    }
}
