<?php

namespace App\Http\Controllers;

use App\ProjectRequest;
use Illuminate\Http\Request;

class ProjectRequestController extends Controller
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
        return view('admin.project_request.addProjectRequest');

    }

    public function create_image()
    {
        return view('admin.project_request.addImageProjectRequest');

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
        ]);
        $projectRequest = new projectRequest();
        $projectRequest->title = $request->title;
        $projectRequest->description = $request->description;

        $projectRequest->save();
        return redirect("admin/project_request/addProjectRequest");
    }

    public function store_image(Request $request)
    {
        $projectRequest = new projectRequest();
        $projectRequest->title = null;
        $projectRequest->description = null;

        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $projectRequest->image = $fileName->getBasename();
        $projectRequest->save();
        return redirect("admin/project_request/viewProjectRequest");

    }

    /**
     * Display the specified resource.
     *
     * @param \App\ProjectRequest $projectRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectRequest $projectRequest)
    {
        $projectRequest = ProjectRequest::all();
        $project_image = ProjectRequest::query()->whereNotNull('image')->get()->first();
//        dd($project_image->image_link);
        return view('admin.project_request.viewProjectRequest')->with(compact('projectRequest', 'project_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ProjectRequest $projectRequest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projectRequest = ProjectRequest::query()->find($id);
        return view('admin.project_request.editProjectRequest', compact('projectRequest'));
    }

    public function editImage($id)
    {
        $projectRequest = ProjectRequest::query()->find($id);
        return view('admin.project_request.editImageProjectRequest', compact('projectRequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ProjectRequest $projectRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projectRequest = ProjectRequest::query()->find($id);
        $projectRequest->title = $request->title;
        $projectRequest->description = $request->description;
        if ($request->image) {
            $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
            $projectRequest->image = $fileName->getBasename();
        }
        $projectRequest->update();
        return redirect("admin/project_request/viewProjectRequest");
    }

    public function updateImage(Request $request, $id)
    {
        $projectRequest = ProjectRequest::query()->find($id);
        if ($request->image) {
            $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
            $projectRequest->image = $fileName->getBasename();
        }
        $projectRequest->update();
        return redirect("admin/project_request/viewProjectRequest");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ProjectRequest $projectRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectRequest::query()->find($id)->delete();
        return redirect('admin/project_request/viewProjectRequest');
    }

    public function destroy_image($id)
    {
        ProjectRequest::query()->find($id)->delete();
        return redirect('admin/project_request/viewProjectRequest');
    }
}
