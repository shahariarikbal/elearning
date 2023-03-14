<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthenticateController extends Controller
{
    public function userLoginFormShow()
    {
        sleep(2);
        return Inertia::render('User/Login');
    }

    public function userRegisterFormShow($id, $slug)
    {
        sleep(2);
        return Inertia::render('User/Register', ['id' => $id]);
    }

    public function userStore(Request $request)
    {
        dd($request->course_id);
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'avatar' => 'required',
            'password' => 'required|confirmed',
        ]);

        $imageName = time() . '.' . $request->avatar->extension();
        $image = $request->avatar->move('/avatar/',$imageName);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $imageName,
            'password' => bcrypt($request->phone),
        ];
        User::create($data);
        sleep(1);
        return redirect('/user/register')->with('message', 'Thank you for course enroll , Your Registration has been successfully done.');
    }
}
