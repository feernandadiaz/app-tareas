<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function index()
    {
         $projects = Project::all();
         $users = User::all();
         $tasks = Task::all();

        return view('projects.index')->with('projects', $projects)->with('users', $users)->with('tasks', $tasks);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $project = new Project;
        $tasks = Task::all();


        $project->name = $request->name;
        $project->description = $request->description;
        $project->status = $request->status;
        $users = $request->user_id;

        $project->save();
        $project->users()->sync($request->user_id);

        return redirect()->back()->with('users', $users);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
