<?php

namespace App\Controllers\employee;

use App\Controllers\BaseController;
use App\Models\UserModel;

class EmployeeController extends BaseController
{
        public function workerForm()
    {
        // lógica aquí
        return view('employee/workerForm');
    }
}
