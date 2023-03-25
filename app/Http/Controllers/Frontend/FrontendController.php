<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Service;
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
        sleep(1);
        return Inertia::render('Courses/CourseList');
    }

    public function courseDetails($id, $slug)
    {
        sleep(1);
        $course = Course::where('id',$id)->with('trainer')->first();
        return Inertia::render('Courses/Details', ['course' => $course]);
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

    public function team()
    {
        sleep(1);
        return Inertia::render('Team/TeamList');
    }
}
