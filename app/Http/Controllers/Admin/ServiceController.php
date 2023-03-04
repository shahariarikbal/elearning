<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function services()
    {
        return Inertia::render('Backend/Service');
    }

    public function addService()
    {
        return Inertia::render('Backend/ServiceAdd');
    }
}
