<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {

        $service = new Service();

        $service->user_id = Auth::id();
        $service->service_name = $request->service_name;
        $service->service_short_desc = $request->service_short_desc;
        $service->service_icon = $request->service_icon;
        $service->article_number = $request->article_number;

        if ($request->hasFile('service_image')) {
            $originalName = $request->file('service_image')->getClientOriginalName();
            $service_image = $request->file('service_image')->storeAs('service_image', $originalName, 'public');
        }
        $service->service_image = $service_image;

        $service->save();

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        $service->service_name = $request->service_name;
        $service->service_short_desc = $request->service_short_desc;
        $service->service_icon = $request->service_icon;
        $service->article_number = $request->article_number;

        if ($request->hasFile('service_image')) {
            $originalName = $request->file('service_image')->getClientOriginalName();
            $service_image = $request->file('service_image')->storeAs('service_image', $originalName, 'public');
        }
        $service->service_image = $service_image;

        $service->save();

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->service_image) {
            Storage::disk('public')->delete($service->service_image);
        }
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
