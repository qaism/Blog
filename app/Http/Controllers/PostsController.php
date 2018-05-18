<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {

        $posts = Post::latest()
                ->filter(request(['month','year']))
                ->get();

        $archives = Post::archives();


        return view('posts.index' , compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store()
    {
        $this->validate(request(),[
           'title' => 'required',
           'body' => 'required'
        ]);

        auth()->user()->publish(

            new Post(request(['title','body']))

        );

        return redirect('/');
    }


    public function show(Post $post)
    {
        return view('posts.show' , compact('post'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
