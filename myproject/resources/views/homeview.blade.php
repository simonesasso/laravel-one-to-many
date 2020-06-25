@extends('mainlayout')
@section('content')


    <h1>EMPLOYEES</h1>

    <ul>

      @foreach ($employees as $employee)

        <li>NAME: <a href="{{route("show", $employee["id"])}}">{{$employee["first_name"]}} {{$employee["last_name"]}}</a></li>



      @endforeach

    </ul>
@endsection
