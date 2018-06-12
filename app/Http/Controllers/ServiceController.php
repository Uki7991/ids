<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all()->sortByDesc('created_at');

        if (\Auth::guest() || !\Auth::user()->admin) {
            $services = $services->where('is_active', '=', true);
        }

        return view('service/index', [
            'services' => $services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicesOnMainCount = Service::all()
            ->filter(function ($value, $key) {
                return $value->on_main;
            })->count();

        return view('service/create', [
            'countOnMain' => $servicesOnMainCount,
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
        $servicesOnMainCount = Service::all()
            ->filter(function ($value, $key) {
                return $value->on_main;
            })->count();

        $service = new Service();

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $fileName = uniqid('service_') . '.jpg';

            Image::make($file)
                ->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/large/' . $fileName)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/small/' . $fileName, 80);

            $service->image = $fileName;
        }
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');

            $fileName = uniqid('service_icon_') . '.' . $file->getClientOriginalExtension();

            Image::make($file)
                ->save(public_path() . '/images/large/' . $fileName, 70)
                ->resize(null, 128, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/small/' . $fileName, 70);

            $service->icon = $fileName;
        }

        $service->name = $request->name;
        if ($request->on_main) {
            $service->on_main = true;
        }
        if ($request->is_active) {
            $service->is_active = true;
        }
        else {
            $service->on_main = false;
        }

        if ($servicesOnMainCount == 6) {
            $service->on_main = false;
        }
        $service->service_content = $request->service_content;
        $service->service_desc = $request->service_desc;

        $service->save();

        return $this->show($service);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('service/show', [
            'service' => $service,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $servicesOnMainCount = Service::all()
            ->filter(function ($value, $key) {
                return $value->on_main;
            })->count();

        return view('service/edit', [
            'service' => $service,
            'countOnMain' => $servicesOnMainCount,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->name = $request->name;
        if ($request->hasFile('image')) {
            if (is_file(public_path() . '/images/large/' . $service->image)) {
                unlink(public_path() . '/images/large/' . $service->image);
                unlink(public_path() . '/images/small/' . $service->image);
            }
            $file = $request->file('image');

            $fileName = uniqid('service_') . '.jpg';

            Image::make($file)
                ->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/large/' . $fileName)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/small/' . $fileName, 80);

            $service->image = $fileName;
        }
        if ($request->hasFile('icon')) {
            if (is_file(public_path() . '/images/large/' . $service->icon)) {
                unlink(public_path() . '/images/large/' . $service->icon);
                unlink(public_path() . '/images/small/' . $service->icon);
            }
            $file = $request->file('icon');

            $fileName = uniqid('service_icon_') . '.' . $file->getClientOriginalExtension();

            Image::make($file)
                ->save(public_path() . '/images/large/' . $fileName, 70)
                ->resize(null, 128, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/images/small/' . $fileName, 70);

            $service->icon = $fileName;
        }
        $service->service_content = $request->service_content;
        $service->service_desc = $request->service_desc;

        if ($request->on_main) {
            $service->on_main = true;
        }
        else {
            $service->on_main = false;
        }
        if ($request->is_active) {
            $service->is_active = true;
        }
        else {
            $service->is_active = false;
            $service->on_main = false;
        }

        $service->save();

        return $this->show($service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->back();
    }
}
