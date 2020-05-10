<?php 

namespace App\Repositories;
use Illuminate\Http\Request;

interface RepositoryInterface
{
    public function index();

    public function store(Request $request);

    public function update(Request $request, $id);

    public function destroy($id);

    public function show($id);
}