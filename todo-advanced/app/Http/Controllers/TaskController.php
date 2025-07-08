<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Priority;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $priorities = Priority::all();
        return view('tasks.create', compact('priorities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newTask = new Task();
        $newTask->title = $data['title'];
        $newTask->note = $data['note'];
        $newTask->date = $data['date'];
        $newTask->priority_id = $data['priority_id'] ?? null; // Assuming priority_id is optional
        $newTask->save();

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $priorities = Priority::all();
        return view('tasks.edit', compact('task', 'priorities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $data = $request->all();

        $task->title = $data['title'];
        $task->note = $data['note'];
        $task->date = $data['date'];
        $task->priority_id = $data['priority_id'] ?? null; // Assuming priority_id is optional
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
