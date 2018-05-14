<?php

namespace App\Http\Controllers;

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

        return view('welcome', [
            'posts' => $postsOnMain,
        ]);
    }
}
