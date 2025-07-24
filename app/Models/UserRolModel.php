<?php

namespace App\Models;

use CodeIgniter\Model;


class UserRolModel extends Model
{
    protected $table = 'tbl_user_rol';
    protected $primaryKey = 'id_users_rol';
    protected $allowedFields = ['id_users', 'id_rol', 'user_rol_estado', 'user_rol_created_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'user_rol_created_at';
    protected $updatedField  = ''; // <- No usamos updated

    public function insertRol($data)
    {
        return $this->insert($data);
    }

public function showUserRol()
{
    return $this->select('tbl_user_rol.id_users_rol, tbl_user_rol.id_rol, tbl_user_rol.id_users, tbl_users.users_nombre, tbl_users.users_apellido, tbl_rol.rol_nombre, tbl_rol.id_rol')
        ->join('tbl_users', 'tbl_users.id_users = tbl_user_rol.id_users')
        ->join('tbl_rol', 'tbl_rol.id_rol = tbl_user_rol.id_rol') // OJO AQUÍ: tbl_rol (no tbl_roles)
        ->findAll();
}



    public function deleteUserRol($id)
    {
        return $this->delete($id);
    }
}
