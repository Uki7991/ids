<?php

namespace App\Http\Controllers;

use App\Worker;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = Worker::all();

        return view('worker/index', [
            'workers' => $workers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('worker/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $worker = new Worker($request->all());

        if ($request->get('is_active')) {
            $worker->is_active = true;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $fileName = uniqid('worker_').md5(uniqid()).'.jpg';

            Image::make($file)
                ->resize(700, 700, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('images/large/').$fileName);

            $worker->image = $fileName;
        }

        $worker->save();

        return redirect('/worker');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        return view('worker/edit', [
            'worker' => $worker,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            if (is_file(public_path('images/large/'.$worker->image))) {
                unlink(public_path('images/large/'.$worker->image));
            }

            $fileName = uniqid('worker_').md5(uniqid()).'.jpg';

            Image::make($file)
                ->resize(700, 700, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('images/large/').$fileName);

            $worker->image = $fileName;
            $request->request->add(['image' => $fileName]);
        }

        $request->request->add(['image' => $worker->image]);

        $worker->fill($request->request->all());

        $request->get('is_active') ? $worker->is_active = true : $worker->is_active = false;

        $worker->save();

        return redirect('/worker');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();

        return redirect()->back();
    }
}
