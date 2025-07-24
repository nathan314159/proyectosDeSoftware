<?php

namespace App\Controllers\proyectosSoftware\semana13;

use CodeIgniter\RESTful\ResourceController;
use App\Models\proyectosSoftware\semana13\RestauranteModel;

class RestauranteController extends ResourceController
{
    protected $modelName = RestauranteModel::class;
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function create()
    {
        $data = $this->request->getJSON(true);
        $this->model->insert($data);
        return $this->respondCreated(['mensaje' => 'Restaurante creado']);
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON(true);
        $this->model->update($id, $data);
        return $this->respond(['mensaje' => 'Restaurante actualizado']);
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(['mensaje' => 'Restaurante eliminado']);
    }
}
