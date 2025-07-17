<?php

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table      = 'tbl_users';
    protected $primaryKey = 'id_users';

    // Campos permitidos para insertar/actualizar
    protected $allowedFields = ['users_nombre', 'users_apellido', 'users_cedula', 'users_password'];



    public function insertUser($data)
    {
        // Inserta un nuevo usuario
        $this->insert($data);

        // Devuelve el usuario insertado por cédula (suponiendo que 'users_cedula' está en $data)
        return $this->where('users_cedula', $data['users_cedula'])->first();
    }


}
