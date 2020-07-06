<?php

namespace App\Http\Controllers\website;

use App\Advantage;
use App\Business;
use App\Http\Controllers\Controller;
use App\ProjectRequest;
use App\Service;
use App\Slider;
use App\SubService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $services = Service::all();
        $advantages = Advantage::all();
        $subServices = SubService::all();
        $projectRequest = ProjectRequest::query()->whereNull('image')->get();
        $project_image = ProjectRequest::query()->whereNotNull('image')->get()->first();
        $business= Business::all();
        return view('website.index', compact('sliders', 'services','advantages','projectRequest', 'project_image' , 'business'));
    }

    public function showService($id)
    {
        $service = Service::query()->find($id);
        return view('website.main_service', compact('service'));
    }

    public function showSubService($id)
    {
        $subService = SubService::query()->find($id);
        $related_subServices = SubService::query()->where('service_id', $subService->service_id)
            ->where('id', '!=', $subService->id)->get();
        return view('website.main_subService', compact('subService', 'related_subServices'));
    }
    public function showBusiness($id)
    {
        $business= Business::query()->find($id);
        return view('website.works', compact('business'));
    }
}
