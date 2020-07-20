<?php

namespace App\Http\Controllers;

use App\Advantage;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('admin.advantage.addAdvantage');
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
        ]);

        $advantage = new advantage();
        $advantage->title = $request->title;
        $advantage->description = $request->description;
        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $advantage->image= $fileName->getBasename();
        $advantage->save();

        return redirect("admin/advantage/addAdvantage");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advantage  $advantage
     * @return \Illuminate\Http\Response
     */
    public function show(Advantage $advantage)
    {
        $advantage =Advantage::all();
        return view('admin.advantage.viewAdvantage')->with(compact('advantage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advantage  $advantage
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $advantage = Advantage::query()->find($id);
        return view('admin.advantage.editAdvantage', compact('advantage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advantage  $advantage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $advantage = Advantage::query()->find($id);
        $advantage->title = $request->title;
        $advantage->description = $request->description;
        if ($request->image){
            $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
            $advantage->image = $fileName->getBasename();
        }
        $advantage->update();
        return redirect(route('advantage.show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advantage  $advantage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Advantage::query()->find($id)->delete();
        return redirect('admin/advantage/viewAdvantage');
    }
}
