@extends('mainlayout')
@section('content')
  <ul>
    <h4>TASK</h4>
    <li>TITLE: {{$task["name"]}}</li>
    <li>DESCRIPTION: {{$task["description"]}}</li>
    <li>DEADLINE: {{$task["deadline"]}}</li>
    <li>EMPLOYEE: {{$task -> employee -> first_name}} {{$task -> employee -> last_name}}</li>
  </ul>
  <a href="{{route("edittask", $task["id"])}}">EDIT TASK</a>
@endsection
