<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="{{route("update", $task["id"])}}" method="post">
      @method("POST")
      @csrf

      <label for="title">TITLE:</label>
      <input type="text" name="title" value="{{$task["title"]}}">
      <br><br>

      <label for="description">DESCRIPTION:</label>
      <input type="text" name="description" value="{{$task["description"]}}">
      <br><br>

      <label for="deadline">DEADLINE:</label>
      <input type="text" name="deadline" value="{{$task["deadline"]}}">
      <br><br>

      <label for="employee_id">EMPLOYEE:</label>
      <select name="employee_id">
        @foreach ($employees as $employee)
          <option value="{{$employee["id"]}}"
           @if ($employee["id"] == $task["employee_id"])
            selected
           @endif
          >{{$employee["first_name"]}} {{$employee["last_name"]}}</option>
        @endforeach
      </select>
      <br><br>


      @foreach ($locations as $location)
        <label for="locations[]"><b>Street:</b> {{$location["street"]}}
          <b>City:</b> {{$location["city"]}} <b>State:</b> {{$location["state"]}}</label>
        <input type="checkbox" name="locations[]" value="{{$location["id"]}}"
          @foreach ($task -> employee -> locations as $checkedLocation)
            @if ($checkedLocation["id"] == $location["id"])
              checked
            @endif
          @endforeach
        ><br>
      @endforeach


      <input type="submit" name="" value="Update">


    </form>
  </body>
</html>
