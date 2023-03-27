<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Inertia\Inertia;
use File;

class SettingController extends Controller
{
    public function setting ()
    {
        $setting = Setting::find(1);
        return Inertia::render('Backend/SettingEdit', ['setting' => $setting]);
    }

    public function updateSetting (Request $request)
    {
        $setting = Setting::find(1);
        if($request->hasFile('logo')){
            if(file_exists(public_path('setting/'.$setting->logo))){
                File::delete(public_path('setting/'.$setting->logo));
                $name = time() . '.' . $request->logo->getClientOriginalExtension();
                $request->logo->move('setting/', $name);
                $setting->logo = $name;
            }
            else{
                $name = time() . '.' . $request->logo->getClientOriginalExtension();
                $request->logo->move('setting/', $name);
                $setting->logo = $name;
            }

        }
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->youtube = $request->youtube;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->instagram = $request->instagram;
        $setting->save();
        sleep(1);
        return redirect()->route('setting-show')->with('success', 'Setting has been updated');
    }
}
