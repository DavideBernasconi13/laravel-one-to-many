<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(5);
        return view('admin.projects.index', compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $form_data = $request->validated();
        $form_data['slug'] = Project::generateSlug($form_data['title']);
        //$form_data['user_id'] = Auth::id();
        // if ($request->hasFile('image')) {
        //     //dd($request->image);
        //     $name = $request->image->getClientOriginalName(); //o il nome che volete dare al file
        //     // $path = $request->file('image')->storeAs(
        //     //     'post_images',
        //     //      $name
        //     // );

        //     //dd($name);
        //     $path = Storage::putFileAs('post_images', $request->image, $name);
        //     //$path = Storage::put('post_images', $request->image);
        //     $form_data['image'] = $path;
        // }
        //dd($path);// post_images/nomefile.png

        $newProject = Project::create($form_data);
        return redirect()->route('admin.projects.show', $newProject->slug);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {

        return view('admin.projects.edit', compact('project'));

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        return redirect()->route('admin.projects.show', $project->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
