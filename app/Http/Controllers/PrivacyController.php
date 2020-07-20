<?php

namespace App\Http\Controllers;

use App\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
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
        $privacy =Privacy::all();
        return view('admin.privacyTrm.view')->with(compact('privacy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.privacyTrm.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Privacy::query()->where('type', 1)->get()->first();

        $this->validate($request, [
            'description' => 'required',
            'type' => 'required',
        ]);

        $privacy = new privacy();
        $privacy->description = $request->description;
        $privacy->type = $request->type;
        $privacy->save();
        return redirect("admin/privacyTrm/add");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function show(Privacy $privacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $privacy = Privacy::query()->find($id);
        return view('admin.privacyTrm.edit', compact('privacy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $privacy = Privacy::query()->find($id);
        $privacy->type = $request->type;
        $privacy->description = $request->description;
        $privacy->update();
        return redirect(route('privacy.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Privacy::query()->find($id)->delete();
        return redirect('admin/privacyTrm/view');
    }
}
