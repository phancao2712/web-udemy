<?php
namespace App\Repositories;

interface RepositoryInterface{
    public function getAll($column = ['*']);

    public function find($id);

    public function create($attributes = []);

    public function update($id, $attributes = []);

    public function delete($id);

    public function paginator($column = ['*'], $limit = 10);
}
