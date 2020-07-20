<?php

namespace App\Http\Controllers;

use App\BlogRating;
use Illuminate\Http\Request;

class BlogRatingController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'message' => 'required',
            'rate' => 'required',
            'blog_id' => 'required',
        ];

        $data = $request->all();

        $this->validate($request, $rules);

        BlogRating::query()->create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogRating  $blogRating
     * @return \Illuminate\Http\Response
     */
    public function show(BlogRating $blogRating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogRating  $blogRating
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogRating $blogRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogRating  $blogRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogRating $blogRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogRating  $blogRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogRating $blogRating)
    {
        //
    }
}
