<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Campaing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    //
    public function comments(Request $request, $id){
        
            $comments = new Comment();
            $comments->comment = $request->comment;
            $comments->campaing_id = $id; 
            $comments->user_id = Auth::user()->id;
            $comments->save(); 
            return back();
    }
}