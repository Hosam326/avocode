<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
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
        $setting = Setting::all();
        return view('admin.settings.view')->with(compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.add');

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
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'icon' => 'image|required',
            'description' => 'required',
            'youtube_link' => 'required',
            'twitter_link' => 'required',
            'inst_link' => 'required',
            'snapchat_link' => 'required',
            'facebook_link' => 'required',
            'in_link' => 'required',
            'whatsApp_link' => 'required',
        ]);

        $setting = new setting();
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $fileName = $request->icon->move(public_path('images'), str_replace(' ', '', $request->icon->getClientOriginalName()));
        $setting->icon = $fileName->getBasename();
        $setting->description = $request->description;
        $setting->youtube_link = $request->youtube_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->inst_link = $request->inst_link;
        $setting->snapchat_link = $request->snapchat_link;
        $setting->facebook_link = $request->facebook_link;
        $setting->in_link = $request->in_link;
        $setting->whatsApp_link = $request->whatsApp_link;
        $setting->save();
        return redirect("admin/settings/add");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::query()->find($id);
        return view('admin.settings.editSetting', compact('setting'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $setting = Setting::query()->find($id);
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        if ($request->icon){
            $fileName = $request->icon->move(public_path('images'), str_replace(' ', '', $request->icon->getClientOriginalName()));
            $setting->icon = $fileName->getBasename();
        }
        $setting->description = $request->description;
        $setting->youtube_link = $request->youtube_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->inst_link = $request->inst_link;
        $setting->snapchat_link = $request->snapchat_link;
        $setting->facebook_link = $request->facebook_link;
        $setting->in_link = $request->in_link;
        $setting->whatsApp_link = $request->whatsApp_link;
        $setting->update();
        return redirect(route('setting.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Setting::query()->find($id)->delete();
        return redirect('admin/settings/view');
    }
}
