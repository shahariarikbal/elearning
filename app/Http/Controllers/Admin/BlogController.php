<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function blogList()
    {
        $blogList = Blog::orderBy('created_at', 'desc')->get();
        return Inertia::render('Backend/BlogList', ['blogList' => $blogList]);
    }

    public function blogAdd()
    {
        return Inertia::render('Backend/BlogAdd');
    }

    public function blogEdit($id)
    {
        $blog = Blog::find($id);
        return Inertia::render('Backend/BlogEdit', ['blog' => $blog]);
    }

    public function blogStore(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $imagePath = $request->image->move('blog/', $imageName);
        Blog::create([
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'image' => $imageName,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description
        ]);
        sleep(1);
        return redirect()->route('blog-list')->with('success', 'Blog has been created');
    }

    public function blogUpdate(Request $request, $id)
    {
        $blog = Blog::find($id);
        if($request->hasFile('image')){
            if(file_exists(public_path('blog/'.$blog->image))){
                File::delete(public_path('blog/'.$blog->image));
                $name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('blog/', $name);
                $blog->image = $name;
            }
            else{
                $name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('blog/', $name);
                $blog->image = $name;
            }

        }
        $blog->title = $request->title;
        $blog->slug = str_replace(' ', '-', strtolower($request->title));
        $blog->short_description = $request->short_description;
        $blog->long_description = $request->long_description;
        $blog->save();
        sleep(1);
        return redirect()->route('blog-list')->with('success', 'Blog has been updated');
    }

    public function blogDelete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        sleep(1);
        return redirect()->route('blog-list')->with('success', 'Blog has been deleted');
    }
}
