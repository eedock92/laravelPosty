<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        //게시물 페이지
        $posts = Post::paginate(20);
        //$posts = Post::get();
       // dd($posts);

        //게시물 작성
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

       //게시물 올리기    
       $request->user()->posts()->create($request->only('body'));

       return back();
    }
}
