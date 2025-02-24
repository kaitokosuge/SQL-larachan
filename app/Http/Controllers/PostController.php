<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {

        // eloquent
        // $startTime = microtime(true);
        // $eloqPosts = $post->get();
        // $runningTime =  microtime(true) - $startTime;
        // // dd($runningTime);
        // dd($eloqPosts);


        // query builder
        $startTime = microtime(true);
        $query = DB::table("posts")->get();
        $runningTime =  microtime(true) - $startTime;
        dd($runningTime);
        dd($query);

        $runnedSql = $query->toSql();

        // $posts = $query->get();
        $postsQuery = Post::with("tag")->where("title", 'aaa');
        $runnedSqlpostsQuery = $postsQuery->toRawSql();
        // dd($runnedSqlpostsQuery);
        dd(preg_replace_array('/\?/', $postsQuery->getBindings(), $postsQuery->toSql()));
        // dd($postsQuery);

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
