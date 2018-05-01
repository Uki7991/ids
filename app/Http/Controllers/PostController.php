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
        $posts = Post::all();

        return view('post/index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        $post->save();

        return redirect('/post/show/' . $post->id);
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
        return view('post/edit', [
            'post' => $post,
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

        return redirect('/post/show/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back();
    }
}
