<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Slider;

class FrontendController extends Controller
{
    public function index()
    {
        $slider = Slider::find(1);
        $services = Service::select(['id', 'title', 'slug', 'image', 'description'])->orderBy('created_at', 'desc')->get();
        $onlineCourses = Course::select(['id', 'title', 'slug', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'online')
            ->get();

        $offlineCourses = Course::select(['id', 'title', 'slug', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'offline')
            ->get();

        $freeCourses = Course::select(['id', 'title', 'slug', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'free')
            ->get();

        $recordCourses = Course::select(['id', 'title', 'slug', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'record')
            ->get();

        sleep(1);
        return Inertia::render('Welcome', [
            'slider' => $slider,
            'services' => $services,
            'onlineCourses' => $onlineCourses,
            'offlineCourses' => $offlineCourses,
            'freeCourses' => $freeCourses,
            'recordCourses' => $recordCourses,
        ]);
    }

    public function courses()
    {
        $onlineCourses = Course::select(['id', 'title', 'slug', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'online')
            ->get();

        $offlineCourses = Course::select(['id', 'title', 'slug', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'offline')
            ->get();

        $freeCourses = Course::select(['id', 'title', 'slug', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'free')
            ->get();

        $recordCourses = Course::select(['id', 'title', 'slug', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'record')
            ->get();
        sleep(1);
        return Inertia::render('Courses/CourseList', [
            'onlineCourses' => $onlineCourses,
            'offlineCourses' => $offlineCourses,
            'freeCourses' => $freeCourses,
            'recordCourses' => $recordCourses,
        ]);
    }

    public function courseDetails($id, $slug)
    {
        sleep(1);
        $course = Course::where('id',$id)->with('trainer', 'comments')->first();
        return Inertia::render('Courses/Details', [
            'course' => $course,
        ]);
    }

    public function blog()
    {
        sleep(1);
        return Inertia::render('Blog/BlogList');
    }

    public function blogDetails()
    {
        sleep(1);
        return Inertia::render('Blog/Details');
    }

    public function teamMembers()
    {
        $teams = Team::get();
        sleep(1);
        return Inertia::render('Team/TeamList', ['teams' => $teams]);
    }

    public function contact()
    {
        $contact = Setting::first();
        sleep(1);
        return Inertia::render('Contact/Contact', ['contact' => $contact]);
    }

    public function contactStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect('/')->with('success', 'Contact has been submitted');
    }

    public function aboutUs()
    {
        sleep(1);
        return Inertia::render('setting/AboutUs');
    }

    public function termsConditions()
    {
        sleep(1);
        return Inertia::render('setting/TermsConditions');
    }

    public function privacyPolicy()
    {
        sleep(1);
        return Inertia::render('setting/PrivacyPolicy');
    }
}
