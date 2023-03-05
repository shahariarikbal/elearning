<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

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

    public function deleteService($id)
    {
        $service = Service::find($id);
        $service->delete();
        sleep(1);
        return redirect()->route('services')->with('success', 'Service has been deleted');
    }
}
