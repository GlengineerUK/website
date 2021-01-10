<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->edit(new Project());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(ProjectRequest $request)
    {
        if ($request->hasFile('image_url'))
        {
            $request->image_url->store('public');
        }
        $project = Project::create($request->input());
        return redirect(route('projects.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show')->withProject($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit')->withProject($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        if ($request->hasFile('new_image')) {
            if ($request->file('new_image')->isValid()) {
                $path = $request->new_image->store('public/images');
                $path = explode("/", $path);
                $request->merge(['image_url' => "/storage/images/" . end($path)]);
            }
        }
        $project->update($request->input());
        return $this->show($project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    public function publish(Project $project)
    {
        if ($project->published === 0)
        {
            $project->published = 1;
            $project->save();
            $projects = Project::all();
            return view('dashboard', ['projects' => $projects, "success" => "{$project->title} is now unpublished"]);
        }
        $projects = Project::all();
        return view('dashboard', ['projects' => $projects, "error" => "{$project->title} is already unpublished"]);
    }

    public function unpublish(Project $project)
    {
        if ($project->published === 1)
        {
            $project->published = 0;
            $project->save();
            $projects = Project::all();
            return view('dashboard', ['projects' => $projects, "success" => "{$project->title} is now unpublished"]);
        }
        $projects = Project::all();
        return view('dashboard', ['projects' => $projects, "error" => "{$project->title} is already unpublished"]);
    }
}
