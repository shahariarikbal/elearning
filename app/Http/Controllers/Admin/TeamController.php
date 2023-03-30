<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Team;
use Illuminate\Http\Request;
use Inertia\Inertia;
use File;

class TeamController extends Controller
{
    public function teamList()
    {
        $teamList = Team::orderBy('created_at', 'desc')->get();
        return Inertia::render('Backend/TeamList', ['teamList' => $teamList]);
    }

    public function teamAdd()
    {
        return Inertia::render('Backend/TeamAdd');
    }

    public function teamEdit($id)
    {
        $team = Team::find($id);
        return Inertia::render('Backend/TeamEdit', ['team' => $team]);
    }

    public function teamStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'avatar' => 'required',
            'designation' => 'required',
            'fb_link' => 'required',
            'in_link' => 'required',
        ]);
        $imageName = time() . '.' . $request->avatar->extension();
        $imagePath = $request->avatar->move('team/', $imageName);
        Team::create([
            'name' => $request->name,
            'avatar' => $imageName,
            'designation' => $request->designation,
            'fb_link' => $request->fb_link,
            'in_link' => $request->in_link,
        ]);
        sleep(1);
        return redirect()->route('team-list')->with('success', 'Team has been created');
    }

    public function teamUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'fb_link' => 'required',
            'in_link' => 'required',
        ]);

        $team = Team::find($id);
        if($request->hasFile('avatar')){
            if(file_exists(public_path('team/'.$team->avatar))){
                File::delete(public_path('team/'.$team->avatar));
                $name = time() . '.' . $request->avatar->getClientOriginalExtension();
                $request->avatar->move('team/', $name);
                $team->avatar = $name;
            }
            else{
                $name = time() . '.' . $request->avatar->getClientOriginalExtension();
                $request->avatar->move('team/', $name);
                $team->avatar = $name;
            }

        }
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->fb_link = $request->fb_link;
        $team->in_link = $request->in_link;
        $team->save();
        sleep(1);
        return redirect()->route('team-list')->with('success', 'Team has been updated');
    }

    public function teamDelete($id)
    {
        $team = Team::find($id);
        $team->delete();
        sleep(1);
        return redirect()->route('team-list')->with('success', 'Team has been deleted');
    }
}
