<?php

namespace App\Repositories\Contracts;

interface PostRepositoryInterface
{
    public function findOrFail(int $id);
}
