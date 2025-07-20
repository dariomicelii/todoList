<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // GET /api/tasks
    public function index()
    {
        // Carichiamo anche la relazione priority
        return response()->json(Task::with('priority')->get());
    }

    // POST /api/tasks
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'note' => 'required|string|max:255',
            'date' => 'nullable|integer',
            'priority_id' => 'nullable|exists:priorities,id',
        ]);

        $task = Task::create($validated);

        // Carichiamo la relazione prima di restituire
        $task->load('priority');

        return response()->json($task, 201);
    }

    // GET /api/tasks/{id}
    public function show($id)
    {
        $task = Task::with('priority')->findOrFail($id);
        return response()->json($task);
    }

    // PUT/PATCH /api/tasks/{id}
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'note' => 'sometimes|string|max:255',
            'date' => 'nullable|integer',
            'priority_id' => 'nullable|exists:priorities,id',
        ]);

        $task->update($validated);

        // Ricarichiamo la relazione aggiornata
        $task->load('priority');

        return response()->json($task);
    }

    // DELETE /api/tasks/{id}
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(null, 204);
    }
}
