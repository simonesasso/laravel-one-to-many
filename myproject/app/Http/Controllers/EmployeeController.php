<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;
use App\Location;
class EmployeeController extends Controller
{
  public function index()
  {
    $employees = Employee::all();

    return view("homeview", compact("employees"));
  }
  public function show($id)
  {
    $employee = Employee::findOrFail($id);

      return view("showview", compact("employee"));
  }
  public function edit($id)
  {
    $employee = Employee::findOrFail($id);
    $locations = Location::all();


    return view("editview", compact("employee","locations"));
  }
  public function update(Request $request,$id)
  {
    $validatedData = $request->validate([
      "first_name" => "required",
      "last_name" => "required",
      "date_of_birth" => "required|date",
      "role" => "required",
      "locations" => "required|array"
    ]);

    $employee = Employee::findOrFail($id);

    $employee["first_name"] = $validatedData["first_name"];
    $employee["last_name"] = $validatedData["last_name"];
    $employee["date_of_birth"] = $validatedData["date_of_birth"];
    $employee["role"] = $validatedData["role"];
    $employee -> save();
    
    $employee -> locations() -> sync($validatedData["locations"]) ;

    return redirect()->route("home");
  }
}
