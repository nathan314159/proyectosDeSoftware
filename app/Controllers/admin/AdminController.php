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
        $UserRolModel = new UserRolModel();

        $user = $userModel->showUsers();
        $rol = $rolModel->showRols();
        $userRoles = $UserRolModel->showUserRol();

        $data = [
            "users" => $user,
            "roles" => $rol,
            "userRoles" => $userRoles,
        ];
        // print_r(["userRoles" => $userRoles]);
        // dd($data);
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


    public function showUserRol()
    {
        $userRolModel = new UserRolModel();
        $data['userRoles'] = $userRolModel->showUserRol(); // <-- corrected method name
        // dd($data['userRoles']);
        return view('admin/assignRolls/index', $data);
    }

    public function deleteUserRol($id_users_rol)
    {
        $userRolModel = new UserRolModel();
        $userRolModel->delete($id_users_rol);

        return redirect()->to('admin/')->with('success', 'Rol eliminado correctamente.');
    }

    public function edit($id)
    {
        $userRolModel = new UserRolModel();
        $userModel = new UserModel(); // Model for users
        $roleModel = new RolModel(); // Model for roles

        $data['userRole'] = $userRolModel->find($id); // Single assignment
        $data['users'] = $userModel->findAll();
        $data['roles'] = $roleModel->findAll();

        return view('admin/assignRolls/edit', $data);
    }

    public function update($id)
    {
        $userRolModel = new UserRolModel();
        $newRoleId = $this->request->getPost('role');
        $userRolModel->update($id, [
            'id_rol' => $newRoleId
        ]);
        return redirect()->to(base_url('admin/'))->with('success', 'Rol actualizado correctamente.');



    }
}
