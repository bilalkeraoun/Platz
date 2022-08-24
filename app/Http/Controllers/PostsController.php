<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    // index des posts
    public function index(){
        $posts =  Post::orderBy('created_at', 'desc')
                  ->take(20)
                  ->get();
        return view('posts.index', compact('posts'));
    }


    // détail d'un post
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }


    // more ressources (10)
    public function more(Request $request){
        $posts = Post::orderby('created_at', 'desc')
                 ->take(10)
                 ->offset($request->offSet)
                 ->get();
        return view('posts._list' , compact('posts'));
    }

    // categorie en dynamique
    public function ajaxCategory(int $category_id){
        $posts=Post::where('category_id', '=', $category_id)
            ->orderby('created_at', 'desc')
            ->take(10)
            ->get();
        return view('posts._list' , compact('posts'));
    }
    
}

