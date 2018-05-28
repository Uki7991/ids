<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

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
        $service->service_content = $request->service_content;
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
