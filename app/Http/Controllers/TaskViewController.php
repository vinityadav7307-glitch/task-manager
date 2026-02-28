<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TaskCompletedMail;

class TaskViewController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'pending'
        ]);

        return redirect('/tasks');
    }

    public function markDone(Task $task)
    {
       if ($task->status = 'completed') {
           $task->status = 'completed';
        $task->save();

        Mail::to('test@example.com')->send(new TaskCompletedMail());
       }
        return redirect('/tasks');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
}