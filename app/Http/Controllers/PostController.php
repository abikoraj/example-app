<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        // dd($posts);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:20',
            'body' => 'required|max:200'
        ]);
        // return redirect()->route('posts.index');

            Post::create($request->only('title', 'body'));
        return redirect()
            ->route('posts.index')
            ->withStatus('Your post has been created.');
    }
}
