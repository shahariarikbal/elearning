<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function enrollList()
    {
        sleep(1);
        $enrolls = Enroll::with('user', 'course')->orderBy('created_at', 'desc')->get();
        return Inertia::render('Backend/UserList', [
            'enrolls' => $enrolls
        ]);
    }

    public function enrollDelete($id)
    {
        $enroll = Enroll::find($id);
        $enroll->delete();
        sleep(1);
        return redirect()->back()->with('success', 'Enroll Student has been deleted');
    }
}
