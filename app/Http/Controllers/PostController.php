<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postsOnMain = Post::all()
            ->where('is_active', '=', true)
            ->sortByDesc('created_at');

        return view('post/index', [
            'posts' => $postsOnMain,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postsOnMainCount = Post::all()
            ->filter(function ($value, $key) {
                return $value->on_main;
            })->count();

        return view('post/create', [
            'countOnMain' => $postsOnMainCount,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postsOnMainCount = Post::all()
            ->filter(function ($value, $key) {
                return $value->on_main;
            })->count();

        $post = new Post();
        $post->title = $request->title;
        $post->image = $request->image;
        $post->post_desc = $request->post_desc;
        $post->post_content = $request->post_content;

        if ($request->is_active) {
            $post->is_active = true;
        }
        if ($request->on_main) {
            $post->on_main = true;
        }

        if ($postsOnMainCount == 2) {
            $post->on_main = false;
        }

        $post->save();

        return redirect('/post/' . $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post/show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $postsOnMainCount = Post::all()
            ->filter(function ($value, $key) {
                return $value->on_main;
            })->count();

        return view('post/edit', [
            'post' => $post,
            'countOnMain' => $postsOnMainCount,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $flag = false;

        if ($request->title) {
            $post->title = $request->title;
            $flag = true;
        }

        if ($request->image) {
            $post->image = $request->image;
            $flag = true;
        }

        if ($request->post_desc) {
            $post->post_desc = $request->post_desc;
            $flag = true;
        }

        if ($request->post_content) {
            $post->post_content = $request->post_content;
            $flag = true;
        }

        if ($request->is_active) {
            $post->is_active = true;
            $flag = true;
        }
        else {
            $post->is_active = false;
            $flag = true;
        }

        if ($request->on_main) {
            $post->on_main = true;
            $flag = true;
        }
        else {
            $post->on_main = false;
            $flag = true;
        }

        if ($flag === true) {
            $post->save();
        }

        return redirect('/post/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back();
    }
}
