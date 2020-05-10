<?php

namespace App\Services;

use App\Repositories\RepositoryInterface;
use App\Model\Usuarios;
use App\Services\UsuarioServiceInterface;

class usuariosService  extends RepositoryInterface implements UsuarioServiceInterface
{

    // space that we can use the repository from
    protected $model;

    public function __construct(Usuarios $usuarios)
    {
        // set the model
        $this->model = new RepositoryInterface($usuarios);
    }

    public function index()
    {
        return $this->model->all();
    }

    public function store(array $data)
    {
        // create record and pass in only fields that are fillable
        return $this->model->create($data->only($this->model->getModel()->fillable));
    }
 
    public function show($id)
    {
        return $this->model->show($id);
    }
 
    public function update(array $data, $id)
    {
        // update model and only pass in the fillable fields
        $this->model->update($data->only($this->model->getModel()->fillable), $id);
 
        return $this->model->show($id);
    }
 
    public function destroy($id)
    {
        return $this->model->delete($id);
    }





}