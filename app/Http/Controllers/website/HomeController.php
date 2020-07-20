<?php

namespace App\Http\Controllers\website;

use App\About;
use App\Advantage;
use App\Advertising;
use App\Blog;
use App\BlogD;
use App\Business;
use App\Contact;
use App\Group;
use App\Http\Controllers\Controller;
use App\BlogRating;
use App\person;
use App\Personal;
use App\Privacy;
use App\ProjectRequest;
use App\Rating;
use App\Service;
use App\Setting;
use App\Slider;
use App\SubService;
use App\Team;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

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
        $advertising = Advertising::query()->where('page_id', 8)->inRandomOrder()->first();
        $service = Service::query()->find($id);
        return view('website.main_service', compact('service', 'advertising'));
    }

    public function showSubService($id)
    {
        $advertising = Advertising::query()->where('page_id', 9)->inRandomOrder()->first();
        $subService = SubService::query()->find($id);
        $related_subServices = SubService::query()->where('service_id', $subService->service_id)
            ->where('id', '!=', $subService->id)->get();
        return view('website.main_subService', compact('subService', 'related_subServices', 'advertising'));
    }

    public function showBusiness($id)
    {
        $advertising = Advertising::query()->where('page_id', 10)->inRandomOrder()->first();
        $business = Business::query()->find($id);
        $first_image = $business->businessImages->first();
        return view('website.businessIndex', compact('business', 'first_image', 'advertising'));
    }

    public function our_works()
    {
        $advertising = Advertising::query()->where('page_id', 4)->inRandomOrder()->first();
        $services = Service::all();
        $works = Business::all();
        return view('website.works', compact('services', 'works', 'advertising'));
    }

    public function showBlog($id)
    {
        $advertising = Advertising::query()->where('page_id', 11)->inRandomOrder()->first();
        $blog = Blog::query()->find($id);
        $blog->view_count += 1;
        $blog->update();
        $related_blogs = Blog::query()->where('id', '!=', $id)->get()->take(3);

        $blog_rate = BlogRating::query()->where('blog_id', $id)->avg('rate');
//        dd($blog_rate);

        return view('website.blogD', compact('blog', 'related_blogs', 'advertising', 'blog_rate'));
    }

    public function blog()
    {
        $blog = Blog::query()->paginate(3);
        return view('website.blog', compact('blog'));

    }

    public function about_As()
    {
        $advertising = Advertising::query()->where('page_id', 3)->inRandomOrder()->first();
        $about = About::all();
        return view('website.about_as', compact('about', 'advertising'));
    }

    public function group_company()
    {
        $advertising = Advertising::query()->where('page_id', 2)->inRandomOrder()->first();
        $group = Group::query()->get()->first();
        $groups = Group::all();
        return view('website.group_company', compact('group', 'groups', 'advertising'));
    }

    public function footer()
    {
        $setting = Setting::query()->get()->first();
        return view('website.layouts._footer', compact('setting'));
    }

    public function jopApp()
    {
        $advertising = Advertising::query()->where('page_id', 5)->inRandomOrder()->first();
        $personal = Personal::query()->latest()->first();
        return view('website.jopApp', compact('personal', 'advertising'));
    }

    public function jopAppStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:11|numeric',
            'address' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'degree' => 'required',
            'job' => 'required',
            'jobTitle' => 'required',
            'jobTime' => 'required',
            'salary' => 'required',
            'yearsExperience' => 'required',
            'skills' => 'required',
            'cv' => 'required',
        ]);
        $person = new person();
        $person->name = $request->name;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->address = $request->address;
        $person->dob = date('Y-m-d');
        $person->gender = $request->gender;
        $person->degree = $request->degree;
        $person->job = $request->job;
        $person->jobTitle = $request->jobTitle;
        $person->jobTime = $request->jobTime;
        $person->salary = $request->salary;
        $person->yearsExperience = $request->yearsExperience;
        $person->skills = $request->skills;
        $fileName = $request->cv->move(public_path('images'), str_replace(' ', '', $request->cv->getClientOriginalName()));
        $person->cv = $fileName->getBasename();
        $person->save();
        return redirect()->back();
    }

    public function team()
    {
        $advertising = Advertising::query()->where('page_id', 6)->inRandomOrder()->first();
        $team = Team::all();
        return view('website.team', compact('team', 'advertising'));
    }

    public function contact()
    {
//        dd('as');
        $advertising = Advertising::query()->where('page_id', 7)->inRandomOrder()->get()->first();
        $contact = Contact::all();
//        dd($advertising);
        return view('website.contact', compact('contact', 'advertising'));
    }

    public function trm()
    {
        $term = Privacy::query()->where('type', 2)->get()->first();
        return view('website.trm', compact('term'));
    }

    public function privacy()
    {
        $privacy = Privacy::query()->where('type', 1)->get()->first();
        return view('website.privacy', compact('privacy'));
    }

    public function rating()
    {
        $rating = Rating::query()->paginate(1);
        return view('website.rating', compact('rating'));
    }
}
