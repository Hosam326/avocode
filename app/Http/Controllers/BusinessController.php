<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business =Business::all();
        return view('admin.business.viewBusiness')->with(compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.business.addBusiness');

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
            'image' => 'image|required',
        ]);

        $business = new Business();
        $business->title = $request->title;
        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $business->image= $fileName->getBasename();
        $business->save();
        return redirect("admin/business/addBusiness");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $business = Business::query()->find($id);
        return view('admin.business.editBusiness', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $business = Business::query()->find($id);
        $business->title = $request->title;
        if ($request->image){
            $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
            $business->image = $fileName->getBasename();
        }
        $business->update();
        return redirect(route('business.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Business::query()->find($id)->delete();
        return redirect('admin/business/viewBusiness');
    }
}
