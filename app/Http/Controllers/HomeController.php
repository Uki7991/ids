<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Service;
use App\Setting;
use App\Slide;
use App\Worker;
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

        $servicesOnMain = Service::all()
            ->where('is_active', '=', true)
            ->where('on_main', '=', true)
            ->sortByDesc('created_at');

        $workers = Worker::all()
            ->where('is_active', '=', true);

        $setting = Setting::find(1);

        $slides = Slide::all()
            ->sortBy('position');

        return view('welcome', [
            'posts' => $postsOnMain,
            'comments' => $commentsOnMain,
            'services' => $servicesOnMain,
            'workers' => $workers,
            'setting' => $setting,
            'slides' => $slides,
        ]);
    }
}
