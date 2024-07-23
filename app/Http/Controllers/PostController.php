<?php

namespace App\Http\Controllers;

use App\Http\Requests\storePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostCreateMail;

class PostController extends Controller
{
    public function index() {
        //$posts = Post::all();
        $posts = Post::OrderBy('id', 'desc')
                     ->paginate(10);

        return view('post.index', compact('posts'));
    }

    public function show(Post $post) {
        // $post = Post::find($id);
        return view('post.posts', compact('post'));
    }

    public function create() {
        return view('post.create');
    }

    public function store(storePostRequest $request) {

        $request['published_at'] = now();
        $post = Post::create($request->all());

        Mail::to('prueba@prueba.com')->send(new PostCreateMail($post));

        return redirect()->route('posts.index');
    }

    public function edit(Post $post) {
        // $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $request->validate([
            'title' => 'required|min:5|max:150',
            'content' => 'required',
            'slug' => "required|unique:posts,slug,$post->id"
        ]);

        $post->update($request->all());
        return redirect()->route('posts.show', $post); ;
    }

    public function destroy(Post $post) {
        // $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }

    // function Post($post, $category = null) {
    //     if ($category) {
    //         return view('post.posts', [
    //             'post' => $post, 
    //             'category' => $category
    //         ]);
    //     }
    //     return view('posts.posts', compact('post'));
    // }
}
