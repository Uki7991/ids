<?php

namespace App\Http\Controllers;

use App\Director;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DirectorController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {
        return view('director.edit', [
            'director' => $director,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {
        if ($request->hasFile('photo')) {

            if (is_file(public_path('images/').$director->photo)) {
                unlink(public_path('images/').$director->photo);
            }

            $file = $request->file('photo');

            $fileName = uniqid('dir_').'jpg';

            Image::make($file)
                ->save(public_path('images/').$fileName, 60);

            $director->photo = $fileName;
        }

        $director->save();

        return redirect()->back();
    }
}
