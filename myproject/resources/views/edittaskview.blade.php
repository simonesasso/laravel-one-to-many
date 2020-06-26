@extends('mainlayout')
@section('content')

      <form  action="{{route("updatetask", $task["id"])}}" method="post">
        @method("POST")
        @csrf

        <label for="name">TITLE:</label>
        <input type="text" name="name" value="{{$task["name"]}}">
        <br><br>

        <label for="description">DESCRIPTION:</label>
        <input type="text" name="description" value="{{$task["description"]}}">
        <br><br>

        <label for="deadline">DEADLINE:</label>
        <input type="text" name="deadline" value="{{$task["deadline"]}}">
        <br><br>




        <label for="employee">EMPLOYEE</label>
        <select name="employee_id">
          @foreach ($employees as $employee)
            <option value="{{$employee["id"]}}"
            @if ($employee["id"] == $task["employee_id"])
              selected
            @endif
            >{{$employee["first_name"]}} {{$employee["last_name"]}}</option>
          @endforeach
        </select>



        <input type="submit" name="" value="Update">


      </form>
@endsection
