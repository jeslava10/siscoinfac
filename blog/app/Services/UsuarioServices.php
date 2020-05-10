<?php

namespace App\Services;

use App\Repositories\Repository;
use App\Model\Usuarios;
use Illuminate\Http\Request;

class usuariosService  
{

    // space that we can use the repository from
    protected $model;

    public function __construct(Usuarios $usuarios)
    {
        // set the model
        $this->model = new Repository($usuarios);
    }

    public function index()
    {
        return $this->model->all();
    }

    public function store(Request $request)
    {
        // create record and pass in only fields that are fillable
        return $this->model->create($request->only($this->model->getModel()->fillable));
    }
 
    public function show($id)
    {
        return $this->model->show($id);
    }
 
    public function update(Request $request, $id)
    {
        // update model and only pass in the fillable fields
        $this->model->update($request->only($this->model->getModel()->fillable), $id);
 
        return $this->model->show($id);
    }
 
    public function destroy($id)
    {
        return $this->model->delete($id);
    }





}