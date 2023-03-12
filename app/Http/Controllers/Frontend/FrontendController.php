<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function index()
    {
        $services = Service::select(['id', 'title', 'slug', 'image', 'description'])->orderBy('created_at', 'desc')->get();
        $onlineCourses = Course::select(['id', 'title', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'online')
            ->get();

        $offlineCourses = Course::select(['id', 'title', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'offline')
            ->get();

        $freeCourses = Course::select(['id', 'title', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'free')
            ->get();

        $recordCourses = Course::select(['id', 'title', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'record')
            ->get();

        sleep(1);
        return Inertia::render('Welcome', [
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

    public function courseDetails($id)
    {
        sleep(1);
        $course = Course::find($id);
        return Inertia::render('Courses/Details', ['course' => $course]);
    }
}
