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
            ->whereStatus(1)
            ->get();

        $offlineCourses = Course::select(['id', 'title', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'offline')
            ->whereStatus(1)
            ->get();

        $freeCourses = Course::select(['id', 'title', 'image', 'short_description', 'real_price', 'discount_price', 'lesson', 'status'])
            ->orderBy('created_at', 'desc')
            ->where('type', 'free')
            ->whereStatus(1)
            ->get();

        sleep(1);
        return Inertia::render('Welcome', [
            'services' => $services,
            'onlineCourses' => $onlineCourses,
            'offlineCourses' => $offlineCourses,
            'freeCourses' => $freeCourses,
        ]);
    }

    public function courses()
    {
        sleep(2);
        return Inertia::render('Courses/CourseList');
    }
}
