<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // insert into "posts"
        $posts = DB::table("posts")->get();
        return view("post.index")->with(["posts" => $posts]);
    }
}
