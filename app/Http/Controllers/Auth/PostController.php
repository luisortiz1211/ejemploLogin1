<?php

namespace App\Http\Controllers\Auth;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(User $user)
    {
        $post = Post::where('user_id', $user->id)->simplePaginate(4);
        return view('dashboard', ['user' => $user, 'posts' => $post]);
    }
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'description' => 'required|max:200',
            'image' => 'required'
        ]);
        // Post::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'image' => $request->image,
        //     'user_id' => auth()->user()->id
        // ]);
        $request->user()->posts()->create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('post.index', auth()->user()->username);
    }

    public function show(Post $post)
    {
        return view('post.show', ['post' => $post]);
    }
}
