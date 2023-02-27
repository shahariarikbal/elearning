<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function index()
    {
        sleep(2);
        return Inertia::render('Welcome');
    }

    public function courses()
    {
        sleep(2);
        return Inertia::render('Courses/CourseList');
    }
}
