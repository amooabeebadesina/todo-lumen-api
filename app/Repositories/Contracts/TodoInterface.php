<?php

namespace App\Repositories\Contracts;

interface TodoInterface
{

    public function all();

    public function create($data);

    public function delete($id);

    public function update($data, $id);

}