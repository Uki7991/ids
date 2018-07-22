<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all()
            ->sortBy('position');

        return view('slide/index', [
            'slides' => $slides,
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
        $slide = new Slide();

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $fileName = uniqid('slide_').md5(uniqid()).'.jpg';

            Image::make($file)
                ->save(public_path('images/large/').$fileName, 60)
                ->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('images/small/').$fileName, 60);

            $slide->image = $fileName;
        }
        $slide->position = $request->position;

        $slide->save();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        if ($request->hasFile('image')) {
            if (is_file(public_path('images/large/'.$slide->image))) {
                unlink(public_path('images/large/'.$slide->image));
            }
            $file = $request->file('image');

            $fileName = uniqid('slide_').md5(uniqid()).'.jpg';

            Image::make($file)
                ->save(public_path('images/large/').$fileName, 60)
                ->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('images/small/').$fileName, 60);

            $slide->image = $fileName;
        }

        $slide->position = $request->position;

        $slide->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();

        return redirect()->back();
    }
}
