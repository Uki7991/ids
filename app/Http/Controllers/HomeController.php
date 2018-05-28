<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $postsOnMain = Post::all()
            ->where('is_active', '=', true)
            ->where('on_main', '=', true)
            ->sortByDesc('created_at');

        $commentsOnMain = Comment::all()
            ->where('is_active', '=', true)
            ->sortByDesc('created_at');

        return view('welcome', [
            'posts' => $postsOnMain,
            'comments' => $commentsOnMain,
        ]);
    }
}
