<?php

namespace App\Http\Controllers;

use App\BusinessPhoto;
use Illuminate\Http\Request;

class BusinessPhotoController extends Controller
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
        return view('admin.business.photo.addBusinessPhoto');

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
            'image' => 'image|required',
            'service_id' => 'required',
        ]);

        $businessPhoto = new businessphoto();
        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $businessPhoto->image= $fileName->getBasename();
        $businessPhoto->work_id= $request->work_id;
        $businessPhoto->save();

        return redirect("admin/business/photo/addBusinessPhoto");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusinessPhoto  $businessPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessPhoto $businessPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessPhoto  $businessPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessPhoto $businessPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessPhoto  $businessPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessPhoto $businessPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessPhoto  $businessPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessPhoto $businessPhoto)
    {
        //
    }
}
