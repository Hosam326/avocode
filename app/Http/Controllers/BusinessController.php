<?php

namespace App\Http\Controllers;

use App\Business;
use App\BusinessPhoto;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BusinessController extends Controller
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
        $business = Business::all();
        return view('admin.business.viewBusiness')->with(compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.business.addBusiness', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'array',
            'image.*' => 'image|required',
            'type' => 'required',
        ]);
        $business = new Business();
        $business->title = $request->title;
        $business->description = $request->description;
        $business->type = $request->type;
        $business->save();

        foreach ($request->image as $image){
            $fileName = $image->move(public_path('images'), str_replace(' ', '', $image->getClientOriginalName()));
            BusinessPhoto::query()->create([
                'image' => $fileName->getBaseName(),
                'work_id' => $business->id
            ]);
        }

        return redirect("admin/business/addBusiness");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Business $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Business $business
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $business = Business::query()->find($id);
        $services = Service::all();
        return view('admin.business.editBusiness', compact('business', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Business $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $business = Business::query()->find($id);
        $business->title = $request->title;
        $business->description = $request->description;
        if ($request->image) {
            $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
            $business->image = $fileName->getBasename();
        }
        $business->type = $request->type;
        $business->update();
        return redirect(route('business.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Business $business
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Business::query()->find($id)->delete();
        return redirect('admin/business/viewBusiness');
    }
}
