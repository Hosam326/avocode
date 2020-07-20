<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
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
        $team = Team::all();
        return view('admin.team.viewMember')->with(compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.addMember');

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
            'name' => 'required',
            'job_name' => 'required',
            'job_title' => 'required',
            'image' => 'image|required',
        ]);

        $team = new team();
        $team->name = $request->name;
        $team->job_name = $request->job_name;
        $team->job_title = $request->job_title;
        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $team->image = $fileName->getBasename();
        $team->save();
        return redirect("admin/team/addMember");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Team $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Team $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::query()->find($id);
        return view('admin.team.editMember', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Team::query()->find($id);
        $team->name = $request->name;
        $team->job_name = $request->job_name;
        $team->job_title = $request->job_title;
        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $team->image = $fileName->getBasename();
        $team->update();
        return redirect("admin/team/viewMember");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Team $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::query()->find($id)->delete();
        return redirect('admin/team/viewMember');
    }
}
