<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('todo.tasks', [
            'tasks' => $tasks
        ]);
    }

    public function task(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);
        error_log('Function was activated');
        if($validator->fails()) {
            return redirect('/to-do')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/to-do');
    }
    public function delete($id) {
        Task::findOrFail($id)->delete();
        return redirect('/to-do');
    }
}
