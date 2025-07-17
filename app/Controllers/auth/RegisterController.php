<?php

namespace App\Controllers\auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class RegisterController extends BaseController
{

    public function registerView()
    {
        return view('auth/register');
    }

    public function registerForm()
    {
        $model = new UserModel();
        $nombre = $this->request->getPost('nombre');
        $apellido = $this->request->getPost('apellido');
        $cedula = $this->request->getPost('cedula');
        $password = $this->request->getPost('password');

        if ($model->where('users_cedula', $cedula)->first()) {
            return redirect()->to('/registro')->with('error', 'La cédula ya está registrada.');
        }

        $data = [
            'users_nombre'   => $nombre,
            'users_apellido' => $apellido,
            'users_cedula'   => $cedula,
            'users_password' => $password
        ];

        $model->insert($data);

        return redirect()->to('/login')->with('mensaje', 'Usuario registrado con éxito');
    }

}
