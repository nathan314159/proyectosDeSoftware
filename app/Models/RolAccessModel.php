<?php
namespace App\Models;

use CodeIgniter\Model;

class RolAccessModel extends Model
{
    protected $table = 'tbl_rol_access';
    protected $primaryKey = 'id_principal_rol_access';
    protected $allowedFields = ['id_rol', 'id_funcionalidad'];
    public $useAutoIncrement = true;
    public $useTimestamps = false;
}
