<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('update-post', $post);
        return view('posts.edit', compact('post'));
    }

    public function update($id, Request $request)
    {

        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->update();

        return redirect()->route('home');
    }
}
