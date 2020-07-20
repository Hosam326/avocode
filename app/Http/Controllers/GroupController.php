<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
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
        $group = Group::all();
        return view('admin.groupComp.viewGroup')->with(compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groupComp.group');

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
            'image' => 'image|required',
            'title2' => 'required',
            'description2' => 'required',
            'image2' => 'image|required',
        ]);

        $group = new group();
        $group->title = $request->title;
        $group->description = $request->description;
        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $group->image = $fileName->getBasename();
        $group->title2 = $request->title2;
        $group->description2 = $request->description2;
        $fileName = $request->image2->move(public_path('images'), str_replace(' ', '', $request->image2->getClientOriginalName()));
        $group->image2 = $fileName->getBasename();
        $group->save();
        return redirect("admin/groupComp/group");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::query()->find($id);
        return view('admin.groupComp.editGroup', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $group = Group::query()->find($id);
        $group->title = $request->title;
        $group->description = $request->description;
        if ($request->image) {
            $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
            $group->image = $fileName->getBasename();
        }
        $group->title2 = $request->title2;
        $group->description2 = $request->description2;
        if ($request->image2) {
            $fileName = $request->image2->move(public_path('images'), str_replace(' ', '', $request->image2->getClientOriginalName()));
            $group->image2 = $fileName->getBasename();
        }
        $group->update();
        return redirect(route('group.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Group $group
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        Group::query()->find($id)->delete();
        return redirect('admin/groupComp/viewGroup');
    }
}
