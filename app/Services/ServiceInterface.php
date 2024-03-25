<?php

namespace App\Services;

use App\Models\Autor;


interface ServiceInterface {

    public function index();

    public function store($request);

    public function show($id);

    public function edit($id);

    public function update($request, string $id);
    
    public function destroy(string $id);

}