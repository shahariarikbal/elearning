<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;
use File;

class ServiceController extends Controller
{
    public function services()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return Inertia::render('Backend/Service', ['services' => $services]);
    }

    public function addService()
    {
        return Inertia::render('Backend/ServiceAdd');
    }

    public function storeService(ServiceRequest $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $imagePath = $request->image->move('service/', $imageName);
        Service::create([
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'image' => $imageName,
            'description' => $request->description
        ]);
        sleep(1);
        return redirect()->route('services')->with('success', 'Service has been created');
    }

    public function editService($id)
    {
        $service = Service::find($id);
        return Inertia::render('Backend/ServiceEdit', ['service' => $service]);
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::find($id);
        if($request->hasFile('image')){
            if(file_exists(public_path('service/'.$service->image))){
                File::delete(public_path('service/'.$service->image));
                $name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('service/', $name);
                $service->image = $name;
            }
            else{
                $name = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('service/', $name);
                $service->image = $name;
            }

        }
        $service->title = $request->title;
        $service->slug = str_replace(' ', '-', strtolower($request->title));
        $service->description = $request->description;
        $service->save();
        sleep(1);
        return redirect()->route('services')->with('success', 'Service has been updated');
    }

    public function deleteService($id)
    {
        $service = Service::find($id);
        $service->delete();
        sleep(1);
        return redirect()->route('services')->with('success', 'Service has been deleted');
    }
}
