<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');

        if (\Auth::guest() || !\Auth::user()->admin) {
            $posts = $posts->where('is_active', '=', true);
        }

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
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $fileName = uniqid('post_image_') . '.jpg';

            Image::make($file)
                ->resize(1000, 1000 , function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/large/' . $fileName)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/small/' . $fileName, 70);

            $post->image = $fileName;
        }
        $post->post_desc = $request->post_desc;
        $post->post_content = $request->post_content;

        if ($request->on_main) {
            $post->on_main = true;
        }
        if ($request->is_active) {
            $post->is_active = true;
        }
        else {
            $post->on_main = false;
        }

        if ($postsOnMainCount == 4) {
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

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if (is_file(public_path() . '/images/large/' . $post->image)) {
                unlink(public_path() . '/images/large/' . $post->image);
                unlink(public_path() . '/images/small/' . $post->image);
            }
            $fileName = uniqid('post_image_') . '.jpg';

            Image::make($file)
                ->resize(1000, 1000 , function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/large/' . $fileName)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/small/' . $fileName, 70);

            $post->image = $fileName;
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

        if ($request->on_main) {
            $post->on_main = true;
            $flag = true;
        }
        else {
            $post->on_main = false;
            $flag = true;
        }

        if ($request->is_active) {
            $post->is_active = true;
            $flag = true;
        }
        else {
            $post->is_active = false;
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
