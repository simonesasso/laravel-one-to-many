@extends('mainlayout')
@section('content')
  <ul>
    <li>FIRST_NAME: {{$employee["first_name"]}}</li>
    <li>LAST_NAME: {{$employee["last_name"]}}</li>
    <li>DATE_OF_BIRTH: {{$employee["date_of_birth"]}}</li>
    <li>ROLE: {{$employee["role"]}}</li><hr>
    @if ($employee -> tasks -> count())

        <h4>Tasks:</h4>
        <ul>
          @foreach ($employee -> tasks as $task)
            <li>{{$task["title"]}}</li>
          @endforeach
        </ul>
    @else
      <h4>No Tasks</h4>
    @endif
    <hr>
    @if ($employee -> locations -> count())
      <h4>Locations:</h4>
      @foreach ($employee -> locations as $location)
        <li>
          <b>Street:</b> {{$location -> street}}
          <b>City:</b> {{$location -> city}} <b>State:</b> {{$location -> state}}
        </li>
      @endforeach
      @else
    <h4>No locations</h4>
    @endif
  </ul>
  <a href="{{route("edit", $employee["id"])}}">EDIT EMPLOYEE</a>



@endsection
