<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class todoController extends Controller
{
    public function display(){
        $tasks=todo::all();
        return view('index',compact('tasks'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'task' => 'required|string|max:255',
        ]);

        $completed = false; // Assuming tasks are initially not completed
        
        $task = new todo;
        $task->task=$data['task'];
        $task->completed=$completed;
        $task->save();

        return redirect()->back()->with('success', 'Task added successfully');
    }
    public function edit(todo $task)
    {   
        return view('edit',compact('task'));
    }
    public function update(Request $request, todo $task)
    {
    $data = $request->validate([
        'task' => 'required|string|max:255',
    ]);

    $task->update([
        'task' => $data['task'],
        'completed'=>!$task->completed, //toggling completed field
    ]);

    return redirect()->route('todos.index')->with('success', 'Task updated successfully');
    }

   
    public function destroy(todo $task){
        $task->delete();
  
        return redirect()->route('todos.index')->with('success','Task deleted successfully');
    }
    
}
