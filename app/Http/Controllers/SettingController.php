<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('setting/edit', [
            'setting' => $setting,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');

            if (is_file(public_path('img/'.$setting->image))) {
                unlink(public_path('img/'.$setting->image));
            }

            $fileName = uniqid('setting_logo_').md5(uniqid()).'.jpg';

            Image::make($file)
                ->resize(200, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('img/').$fileName);

            $setting->logo = $fileName;
        } else {
            $setting->logo = null;
        }

        $request->request->add(['logo' => $setting->logo]);

        $setting->fill($request->request->all());

        $setting->save();

        return redirect()->back();
    }
}
