<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthenticateController extends Controller
{
    public function userLoginFormShow()
    {
        sleep(2);
        return Inertia::render('User/Login');
    }

    public function userRegisterFormShow()
    {
        sleep(2);
        return Inertia::render('User/Register');
    }
}
