<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    public function courses()
    {
        return Inertia::render('Backend/Courses');
    }
}