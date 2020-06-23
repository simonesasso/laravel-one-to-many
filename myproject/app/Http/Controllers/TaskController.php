<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;
use App\Location;
class TaskController extends Controller
{
  public function index()
  {
    $tasks = Task::all();

    return view("homeview", compact("tasks"));
  }
  public function edit($id)
  {
    $task = Task::findOrFail($id);
    $employees = Employee::all();
    $locations = Location::all();

    return view("editview", compact("task","employees","locations"));
  }
  public function update(Request $request,$id)
  {
    $validatedData = $request->validate([
      "title" => "required",
      "description" => "required",
      "deadline" => "required|date",
      "employee_id" => "required",
      // "locations" => "required|array"
    ]);

    // dd($validatedData);
    Task::whereId($id)->update($validatedData);
    return redirect()->route("home");
  }
}
