<?php

namespace App\Http\Controllers;

use App\Advertising;
use Illuminate\Http\Request;

class AdvertisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertising = Advertising::all();
        return view('admin.advertising.viewAdvertising')->with(compact('advertising'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertising.addAdvertising');

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
            'link' => 'required',
            'page_id' => 'required',
            'image' => 'image|required',
        ]);
//        dd($request->all());

        $advertising = new advertising();
        $advertising->title = $request->title;
        $advertising->description = $request->description;
        $advertising->link = $request->link;
        $advertising->page_id = $request->page_id;
        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $advertising->image= $fileName->getBasename();
        $advertising->save();
        return redirect("admin/advertising/addAdvertising");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advertising  $advertising
     * @return \Illuminate\Http\Response
     */
    public function show(Advertising $advertising)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advertising  $advertising
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advertising = Advertising::query()->find($id);
        return view('admin.advertising.editAdvertising', compact('advertising'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advertising  $advertising
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $advertising = Advertising::query()->find($id);
        $advertising->title = $request->title;
        $advertising->description = $request->description;
        $advertising->link = $request->link;
        $advertising->page_id = $request->page_id;
//        dd($request->page_id);
        if ($request->image){
            $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
            $advertising->image = $fileName->getBasename();
        }
        $advertising->update();
        return redirect(route('advertising.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advertising  $advertising
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Advertising::query()->find($id)->delete();
        return redirect('admin/advertising/viewAdvertising');
    }
}
