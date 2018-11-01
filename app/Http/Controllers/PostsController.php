<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();

        return view('posts.index', compact('posts'));
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {


        Posts::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

       return redirect('/');


    }
}
