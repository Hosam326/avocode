<?php

namespace App\Http\Controllers\website;

use App\Advantage;
use App\Advertising;
use App\Blog;
use App\BlogD;
use App\Business;
use App\Http\Controllers\Controller;
use App\ProjectRequest;
use App\Service;
use App\Slider;
use App\SubService;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $services = Service::all();
        $advantages = Advantage::all();
        $subServices = SubService::all();
        $blog = Blog::all();
        $advertising = Advertising::query()->where('page_id', 1)->inRandomOrder()->first();
        $projectRequest = ProjectRequest::query()->whereNull('image')->get();
        $project_image = ProjectRequest::query()->whereNotNull('image')->get()->first();
        $business = Business::all();
        return view('website.index',
            compact('sliders', 'services', 'advantages', 'projectRequest', 'project_image', 'business', 'advertising', 'blog'));
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
        $business = Business::query()->find($id);
        $first_image = $business->businessImages->first();
        return view('website.businessIndex', compact('business', 'first_image'));
    }
    public function our_works()
    {
        $services = Service::all();
        $works = Business::all();
        return view('website.works', compact('services', 'works'));
    }
    public function showBlog($id)
    {
        $blog = Blog::query()->find($id);
        $related_blogs = Blog::query()->where('id', '!=', $id)->get()->take(3);
        return view('website.blogD',compact('blog', 'related_blogs'));
    }
    public function blog()
    {
        $blog = Blog::query()->paginate(3);
        return view('website.blog', compact('blog'));

    }
    public function about_As()
    {
        return view('website.about_as');
    }
    public function group_company()
    {
        return view('website.group_company');
    }
    public function jopApp()
    {
        return view('website.jopApp');
    }
    public function team()
    {
        return view('website.team');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function trm()
    {
        return view('website.trm');
    }
    public function privacy()
    {
        return view('website.privacy');
    }
    public function rating()
    {
        return view('website.rating');
    }
}
