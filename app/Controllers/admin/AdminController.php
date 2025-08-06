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

        //print_r($data);
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

            // return redirect()->to('admin/assignRolls')->with('success', 'Rol asignado correctamente.');
            return 1;
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

    public function deleteUserRol()
    {

        $model = new UserRolModel();
        $model->delete($this->request->getGET('id'));
        return $this->response->setJSON(['status' => 'ok']);


        // return $this->response->setStatusCode(405)->setJSON(['error' => 'Método no permitido']);
    }


    // public function edit($id)
    // {
    //     $userRolModel = new UserRolModel();
    //     $userModel = new UserModel(); // Model for users
    //     $roleModel = new RolModel(); // Model for roles

    //     $data['userRole'] = $userRolModel->find($id); // Single assignment
    //     $data['users'] = $userModel->findAll();
    //     $data['roles'] = $roleModel->findAll();

    //     return view('admin/assignRolls/edit', $data);
    // }

    // public function update($id)
    // {
    //     $userRolModel = new UserRolModel();
    //     $newRoleId = $this->request->getPost('role');
    //     $userRolModel->update($id, [
    //         'id_rol' => $newRoleId
    //     ]);
    //     return redirect()->to(base_url('admin/'))->with('success', 'Rol actualizado correctamente.');
    // }

    public function updateUserRol()
    {
        $id = $this->request->getPost('id_users_rol');
        $newRole = $this->request->getPost('role');

        log_message('debug', 'ID recibido: ' . $id);
        log_message('debug', 'Nuevo rol recibido: ' . $newRole);

        if (!$id || !$newRole) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Datos incompletos']);
        }

        $userRolModel = new \App\Models\UserRolModel();

        $updated = $userRolModel->update($id, ['id_rol' => $newRole]);
        return  $updated ? 
            $this->response->setJSON(['status' => 'ok', 'message' => 'Rol actualizado']) : 
            $this->response->setJSON(['status' => 'error', 'message' => 'No se pudo actualizar el rol']);

    }
}
