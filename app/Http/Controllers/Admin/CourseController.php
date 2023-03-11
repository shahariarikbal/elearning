<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use Inertia\Inertia;
use App\Models\Course;
use File;

class CourseController extends Controller
{
    public function courses()
    {
        $courses = Course::orderBy('created_at', 'desc')->get();
        return Inertia::render('Backend/Courses', ['courses' => $courses]);
    }

    public function addCourse()
    {
        return Inertia::render('Backend/CourseAdd');
    }

    public function storeCourse(CourseRequest $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $imagePath = $request->image->move('course/', $imageName);
        Course::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'type' => $request->type,
            'real_price' => $request->real_price,
            'discount_price' => $request->discount_price,
            'lesson' => $request->lesson,
            'image' => $imageName,
        ]);
        sleep(1);
        return redirect()->route('course-list')->with('success', 'Course has been created');
    }

    public function editCourse($id)
    {
        $course = Course::find($id);
        return Inertia::render('Backend/CourseEdit', ['course' => $course]);
    }

    public function updateCourse(Request $request, $id)
    {
        $course = Course::find($id);
        if($request->hasFile('image')){
            if(file_exists(public_path('course/'.$course->image))){
                File::delete(public_path('course/'.$course->image));
                $name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('course/', $name);
                $course->image = $name;
            }
            else{
                $name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('course/', $name);
                $course->image = $name;
            }

        }
        $course->title = $request->title;
        $course->short_description = $request->short_description;
        $course->long_description = $request->long_description;
        $course->type = $request->type;
        $course->real_price = $request->real_price;
        $course->discount_price = $request->discount_price;
        $course->lesson = $request->lesson;
        $course->save();
        sleep(1);
        return redirect()->route('course-list')->with('success', 'Course has been updated');
    }

    public function deleteCourse($id)
    {
        $course = Course::find($id);

        if(file_exists(public_path('course/'.$course->image))){
            File::delete(public_path('course/'.$course->image));
        }

        $course->delete();
        sleep(1);
        return redirect()->route('course-list')->with('success', 'Course has been deleted');
    }
}
