<?php

namespace App\Http\Controllers\Project;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {

        $project = new Project();
        $project->number = "P" . uniqid();
        $project->user_id = Auth::user()->id;
        $project->project_name = $request->project_name;
        $project->project_type = $request->project_type;
        $project->project_admin_id = $request->project_admin_id;
        $project->project_other_users_id = $request->project_other_users_id;
        $project->project_start = $request->project_start;
        $project->project_end = $request->project_end;
        $project->project_client_id = $request->project_client_id;
        $project->project_desc = $request->project_desc;
        $project->project_short_desc = $request->project_short_desc;

        if ($request->hasFile('project_image')) {

            $originalName = $request->file('project_image')->getClientOriginalName();
            $project_image = $request->file('project_image')->storeAs('project_image', $originalName, 'public');
        }

        if ($request->hasFile('project_video')) {

            $originalName = $request->file('project_video')->getClientOriginalName();
            $project_video = $request->file('project_video')->storeAs('project_video', $originalName, 'public');
        }

        $project->project_image = $project_image;
        $project->project_video = $project_video;

        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {

        $project = Project::find($id);
        $project->project_name = $request->project_name;
        $project->project_type = $request->project_type;
        $project->project_admin_id = $request->project_admin_id;
        $project->project_other_users_id = $request->project_other_users_id;
        $project->project_start = $request->project_start;
        $project->project_end = $request->project_end;
        $project->project_client_id = $request->project_client_id;
        $project->project_desc = $request->project_desc;
        $project->project_short_desc = $request->project_short_desc;

        if ($request->hasFile('project_image')) {

            $originalName = $request->file('project_image')->getClientOriginalName();
            $project_image = $request->file('project_image')->storeAs('project_image', $originalName, 'public');
        }

        if ($request->hasFile('project_video')) {

            $originalName = $request->file('project_video')->getClientOriginalName();
            $project_video = $request->file('project_video')->storeAs('project_video', $originalName, 'public');
        }

        $project->project_image = $project_image;
        $project->project_video = $project_video;

        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->project_image) {
            Storage::disk('public')->delete($project->project_image);
        }
        if ($project->project_video) {
            Storage::disk('public')->delete($project->project_video);
        }
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
