<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Comment;
use App\Tag;
use App\PostTag;
use DB;
use Auth;

class PostController extends Controller
{
     /**
     * Create a new controller instance.
     */

    public function index(){
    	
        return view('posts.index');
    }
}

