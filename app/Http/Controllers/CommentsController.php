<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentsController extends Controller
{
 
    public function addComment(Request $request){
        $comment = new Comment;
        $comment->pseudo = $request->pseudo;
        $comment->content = $request->content;
        $comment->post_id = $request->postID;
        $comment->save();
        return view ('comments._show', ['comment' =>$comment]);
        
    }

      
}
 