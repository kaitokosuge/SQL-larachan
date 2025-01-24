<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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

    public function store(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->content = "hello";
        $post->tag_id = 1;
        $post->save();
        return redirect("/");
    }
}
