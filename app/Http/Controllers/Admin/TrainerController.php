<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TrainerRequest;
use Inertia\Inertia;
use App\Models\Trainer;
use File;

class TrainerController extends Controller
{
    public function trainer ()
    {
        $trainers = Trainer::orderBy('created_at', 'desc')->get();
        return Inertia::render('Backend/Trainers', ['trainers' => $trainers]);
    }

    public function addTrainer ()
    {
        return Inertia::render('Backend/TrainerAdd');
    }

    public function storeTrainer (TrainerRequest $request)
    {
        $imageName = time() . '.' . $request->avatar->extension();
        $imagePath = $request->avatar->move('trainer/', $imageName);
        Trainer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'designation_expertise' => $request->designation_expertise,
            'avatar' => $imageName,
        ]);
        sleep(1);
        return redirect()->route('trainer-list')->with('success', 'Trainer has been created');
    }

    public function deleteTrainer ($id)
    {
        $trainer = Trainer::find($id);

        if(file_exists(public_path('trainer/'.$trainer->avatar))){
            File::delete(public_path('trainer/'.$trainer->avatar));
        }

        $trainer->delete();
        sleep(1);
        return redirect()->route('trainer-list')->with('success', 'Trainer has been deleted');
    }
}
