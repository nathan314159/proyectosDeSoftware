<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RolModel;
use App\Models\UserRolModel;

class AdminController extends BaseController
{

    public function viewRolls()
    {
        $userModel = new UserModel();
        $rolModel = new RolModel();

        $user = $userModel->showUsers();
        $rol = $rolModel->showRols();

        $data = [
            "users" => $user,
            "roles" => $rol,
        ];
        // dd($data['roles']);
        return view('admin/assignRolls/index', $data);
    }



    public function assignRolls()
    {
        $userRolModel = new UserRolModel();

        $userId = $this->request->getPost('user');
        $roleId = $this->request->getPost('role');

        if ($userId && $roleId) {
            $data = [
                'id_users'           => $userId,
                'id_rol'             => $roleId,
                'user_rol_estado'    => 1, // or 1
                'user_rol_created_at' => date('Y-m-d H:i:s'),
                
            ];

            $userRolModel->insertRol($data);

            return redirect()->to('admin/assignRolls')->with('success', 'Rol asignado correctamente.');
        }

        return redirect()->back()->with('error', 'Debe seleccionar usuario y rol.');
    }
}
