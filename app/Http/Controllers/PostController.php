<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }

    public function store(Request $request)
    {
        $data = [
            'user_id' => 1,
            'title' => 'Projeto'.date('d/m/Y h:i:s'),
            'content' => 'Data: '.date('d/m/Y').' | Hora: '.date('h:i:s'),
        ];

        $post = Post::create($data);

        return $post;
    }
}
