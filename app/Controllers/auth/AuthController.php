<?php

namespace App\Controllers\auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function loginForm()
    {
        return view('auth/login');
    }

       public function login()
    {
        
        $model = new UserModel;
        $cedula = $this->request->getPost('cedula');
        $password = $this->request->getPost('password');
        $usuario = $model->where('users_cedula', $cedula)->first();
        
        // print_r($usuario['id_users']);
 
        if ($usuario !== null && $usuario['users_password'] === $password) {
            session()->set([
                'users_id' => $usuario['id_users'],
                'users_nombre' => $usuario['users_nombre'],
                'isLoggedIn' => true
            ]);
            return redirect()->to('/empleado'); // Página protegida
        } else {
            return redirect()->to('/login')->with('error', 'Cédula o contraseña incorrecta');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth/login');
    }
}
