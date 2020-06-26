@extends('mainlayout')
@section('content')
  <h1>TASKS</h1>
  <ul>
    @foreach ($tasks as $task)
      <li>NAME: {{$task["name"]}}</li>
      <li>DESCRIPTION: {{$task["description"]}}</li>
      <li>DEADLINE: {{$task["deadline"]}}</li>
      <li>EMPLOYEE: {{$task -> employee -> first_name}} {{$task -> employee -> last_name}} </li>
      <li><a href="{{route("edittask", $task["id"])}}">EDIT TASK</a></li><hr>
    @endforeach
  </ul>
@endsection
