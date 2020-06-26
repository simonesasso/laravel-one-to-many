<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;
class TaskController extends Controller
{
  public function indextasks()
  {
    $tasks = Task::all();
    return view("indextasks", compact("tasks"));
  }
  public function showtask($id)
  {
    $task = Task::findOrFail($id);

    return view("showtask", compact("task"));
  }
  public function edittask($id)
  {
    $task = Task::findOrFail($id);
    $employees = Employee::all();

    return view("edittaskview",compact("task","employees"));
  }
  public function update(Request $request,$id)
  {
    $validatedData = $request->validate([
      "name" => "required",
      "description" => "required",
      "deadline" => "required|date",
      "employee_id" => "required"

    ]);

    Task::whereId($id) -> update($validatedData);




    return redirect()->route("home");
  }
}
