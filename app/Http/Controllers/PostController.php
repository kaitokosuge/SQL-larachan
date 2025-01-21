<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // insert into "posts"
        $query = DB::table("posts");

        $runnedSql = $query->toSql();
        $posts = $query->get();

        return view("post.index")->with(["posts" => $posts, "runnedSql" => $runnedSql]);
    }
}
