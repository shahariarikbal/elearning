<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use Inertia\Inertia;
use App\Models\Course;
use App\Models\Trainer;
use File;

class CourseController extends Controller
{
    public function courses()
    {
        $courses = Course::orderBy('created_at', 'desc')->with('trainer')->get();
        return Inertia::render('Backend/Courses', ['courses' => $courses]);
    }

    public function addCourse()
    {
        $trainers = Trainer::all();
        return Inertia::render('Backend/CourseAdd', ['trainers' => $trainers]);
    }

    public function storeCourse(CourseRequest $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $imagePath = $request->image->move('course/', $imageName);
        Course::create([
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'trainer_id' => $request->trainer_id,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'type' => $request->type,
            'real_price' => $request->real_price,
            'discount_price' => $request->discount_price,
            'lesson' => $request->lesson,
            'duration' => $request->duration,
            'video_url' => $request->video_url,
            'image' => $imageName,
        ]);
        sleep(1);
        return redirect()->route('course-list')->with('success', 'Course has been created');
    }

    public function editCourse($id)
    {
        $trainers = Trainer::all();
        $course = Course::find($id);
        return Inertia::render('Backend/CourseEdit', ['course' => $course, 'trainers'=>$trainers]);
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
        $course->slug = str_replace(' ', '-', strtolower($request->title));
        $course->short_description = $request->short_description;
        $course->long_description = $request->long_description;
        $course->type = $request->type;
        $course->real_price = $request->real_price;
        $course->discount_price = $request->discount_price;
        $course->trainer_id = $request->trainer_id;
        $course->lesson = $request->lesson;
        $course->duration = $request->duration;
        $course->video_url = $request->video_url;
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
