<?php

namespace App\Http\Controllers;

use App\Slider;
use App\SliderTags;
use App\Tag;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::get();
return view('website.index')->with(compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.slider.addSlider')->with('tags',Tag::get());
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
            'tag_id' => 'required|array',
            'image' => 'image|required',
        ]);


        $slider = new slider();
        $slider->title = $request->title;
        $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
        $slider->image = $fileName->getBasename();
        $slider->save();

        foreach ($request->tag_id as $tag){
            SliderTags::query()->create([
                'tag_id' => $tag,
                'slider_id' => $slider->id
            ]);
        }

        return redirect("admin/slider/addSlider");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        $slider =Slider::all();
        return view('admin.slider.viewSlider')->with(compact('slider'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::query()->find($id);
        $tags = Tag::all();
        return view('admin.slider.editSlider', compact('slider', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $slider = Slider::query()->find($id);

        $this->validate($request, [
            'title' => 'required',
            'tag_id' => 'required|array',
            'image' => 'image|nullable',
        ]);

//        dd($request);
        $slider->title = $request->title;

        if ($request->image){
            $fileName = $request->image->move(public_path('images'), str_replace(' ', '', $request->image->getClientOriginalName()));
            $slider->image = $fileName->getBasename();
        }
        $slider->update();

        $slider->tags()->sync($request->tag_id);

        return redirect(route('slider.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::query()->find($id)->delete();
        return redirect('/admin/slider/viewSlider');
    }
}
