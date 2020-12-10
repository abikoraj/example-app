<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'Post one'],
            ['id' => 2, 'title' => 'Post two']
        ];

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        return view('posts.show', [
            'id' => $id
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|max:20',
            'body' => 'required|max:200'
        ]);
        return redirect()->route('posts.index');
    }
}
