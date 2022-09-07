<?php

namespace App\Services;

use App\Repositories\Contracts\PostRepositoryInterface;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function get()
    {
        return $this->postRepository->get();
    }

    public function find(int $id)
    {
        return $this->postRepository->find($id);
    }

    public function create(array $data)
    {
        return $this->postRepository->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->postRepository->update($id, $data);
    }

    public function findOrFail(int $id)
    {
        return $this->postRepository->findOrFail($id);
    }
}
