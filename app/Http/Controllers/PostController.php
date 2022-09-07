<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $repository;

    public function __construct(PostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $posts = $this->repository->all();

        return $posts;
    }

    public function find($id)
    {
        $post = $this->repository->findOrFail($id);

        return $post;
    }

    public function store(Request $request)
    {
        $data = [
            'user_id' => 1,
            'title' => 'Projeto'.date('d/m/Y h:i:s'),
            'content' => 'Data: '.date('d/m/Y').' | Hora: '.date('h:i:s'),
        ];

        $post = $this->repository->create($data);

        return $post;
    }
}
