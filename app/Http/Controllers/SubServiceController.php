<?php

namespace App\Http\Controllers;

use App\Service;
use App\SubService;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.service.subService', compact('services'));
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
            'service_id' => 'required',
        ]);

        $subService = new subservice();
        $subService->title = $request->title;
        $subService->description = $request->description;
        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $subService->image= $fileName->getBasename();
        $subService->service_id= $request->service_id;
        $subService->save();
        return redirect("admin/service/subService");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function show(SubService $subService)
    {
        $subService =SubService::all();
        return view('admin.service.viewSubService')->with(compact('subService'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subService = SubService::query()->find($id);
        $services = Service::all();
        return view('admin.service.editSubService', compact('subService', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subService = SubService::query()->find($id);
        $subService->title = $request->title;
        $subService->description = $request->description;
        $subService->service_id = $request->service_id;
        if ($request->image){
            $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
            $subService->image = $fileName->getBasename();
        }

        $subService->update();
        return redirect(route('subService.show'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubService::query()->find($id)->delete();
        return redirect('/admin/service/viewSubService');
    }
}
