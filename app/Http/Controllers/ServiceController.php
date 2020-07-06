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
        $service =Service::all();
        return view('admin.service.viewService')->with(compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.addService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|required',
            'icon' => 'required',
        ]);

        $service = new service();
        $service->title = $request->title;
        $service->description = $request->description;
        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $service->image= $fileName->getBasename();
        $fileName = $request->icon->move(public_path('icons'), str_replace(' ', '', $request->icon->getClientOriginalName()));
        $service->icon= $fileName->getBasename();
        $service->save();

        return redirect("admin/service/addService");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $service =Service::all();
        return view('admin.service.viewService')->with(compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::query()->find($id);
        return view('admin.service.editService', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::query()->find($id);
        $service->title = $request->title;
        $service->description = $request->description;
        if ($request->image){
            $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
            $service->image = $fileName->getBasename();
        }
        if ($request->icon){
            $fileName = $request->icon->move(public_path('icons'), str_replace(' ', '', $request->icon->getClientOriginalName()));
            $service->icon= $fileName->getBasename();
        }
        $service->update();
        return redirect(route('service.show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::query()->find($id)->delete();
        return redirect('admin/service/viewService');
    }
}
