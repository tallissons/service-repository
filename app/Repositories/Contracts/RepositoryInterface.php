<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    public function all();

    public function get();

    public function find(int $id);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);
}
