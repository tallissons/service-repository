<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $posts = $this->service->get();

        return response()->json($posts);
    }

    public function find($id)
    {
        $post = $this->service->findOrFail($id);

        return response()->json($post);
    }

    public function store(Request $request)
    {
        $data = [
            'user_id' => 1,
            'title' => 'Projeto'.date('d/m/Y h:i:s'),
            'content' => 'Data: '.date('d/m/Y').' | Hora: '.date('h:i:s'),
        ];

        $post = $this->service->create($data);

        return response()->json($post);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $post = $this->service->update($id, $data);

        return response()->json($post);
    }
}
