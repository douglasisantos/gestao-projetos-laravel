<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Project $project)
    {
        $tasks = $project->tasks()->get();
        return view('tasks.index', compact('project', 'tasks'));
    }

    public function create(Project $project)
    {
        return view('tasks.create', compact('project'));
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $project->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'to_do',
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('projects.tasks.index', $project);
    }

    public function show(Project $project, Task $task)
    {
        return view('tasks.show', compact('project', 'task'));
    }

    public function edit(Project $project, Task $task)
    {
        return view('tasks.edit', compact('project', 'task'));
    }

    public function update(Request $request, Project $project, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:to_do,in_progress,done',
        ]);

        $task->update($request->all());

        return redirect()->route('projects.tasks.index', $project);
    }

    public function destroy(Project $project, Task $task)
    {
        $task->delete();
        return redirect()->route('projects.tasks.index', $project);
    }
}
