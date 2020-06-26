@extends('mainlayout')
@section('content')


    <form  action="{{route("update", $employee["id"])}}" method="post">
      @method("POST")
      @csrf

      <label for="first_name">FIRST_NAME:</label>
      <input type="text" name="first_name" value="{{$employee["first_name"]}}">
      <br><br>

      <label for="last_name">LAST_NAME:</label>
      <input type="text" name="last_name" value="{{$employee["last_name"]}}">
      <br><br>

      <label for="date_of_birth">DATE_OF_BIRTH:</label>
      <input type="text" name="date_of_birth" value="{{$employee["date_of_birth"]}}">
      <br><br>

      <label for="role">ROLE:</label>
      <input type="text" name="role" value="{{$employee["role"]}}">
      <br><br>

      <span>LOCATIONS</span><br>
      <label for="locations[]"></label>
      @foreach ($locations as $location)
        <input type="checkbox" name="locations[]" value="{{$location["id"]}}"
          @foreach ($employee -> locations as $checkedLocation)
            @if ($checkedLocation["id"] == $location["id"])
              checked
            @endif
          @endforeach
        ><b>Street:</b> {{$location["street"]}}
         <b>City:</b> {{$location["city"]}}
         <b>State:</b> {{$location["state"]}}<br>
      @endforeach


      <input type="submit" name="" value="Update">


    </form>
@endsection
