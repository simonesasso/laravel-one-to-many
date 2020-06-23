<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;
class TaskController extends Controller
{
  public function index()
  {
    $tasks = Task::all();
    $locations = Location::all();
    return view("homeview", compact("tasks", "locations"));
  }
  public function edit($id)
  {
    $task = Task::findOrFail($id);
    $employees = Employee::all();

    return view("editview", compact("task","employees"));
  }
  public function update(Request $request,$id)
  {
    $validatedData = $request->validate([
      "title" => "required",
      "description" => "required",
      "deadline" => "required|date",
      "employee_id" => "required"
    ]);

    Task::whereId($id)->update($validatedData);

    return redirect()->route("home");
  }
}
