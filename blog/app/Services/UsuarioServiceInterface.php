<?php 

namespace App\Services;
use Illuminate\Http\Request;

interface UsuarioServiceInterface
{

    public function index();

    public function store(Request $request);

    public function update(Request $request, $id);

    public function destroy($id);

    public function show($id);
    
}