<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Inertia\Inertia;
use File;

class SliderController extends Controller
{
    public function slider ()
    {
        $slider = Slider::find(1);
        return Inertia::render('Backend/SliderEdit', ['slider' => $slider]);
    }

    public function updateSlider (Request $request)
    {
        $slider = Slider::find(1);
        if($request->hasFile('image')){
            if(file_exists(public_path('slider/'.$slider->image))){
                File::delete(public_path('slider/'.$slider->image));
                $name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('slider/', $name);
                $slider->image = $name;
            }
            else{
                $name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('slider/', $name);
                $slider->image = $name;
            }

        }
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->save();
        sleep(1);
        return redirect()->route('slider-show')->with('success', 'Course has been updated');
    }
}
