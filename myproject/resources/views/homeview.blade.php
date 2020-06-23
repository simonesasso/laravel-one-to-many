<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>TASKS</h1>

    <ul>

      @foreach ($tasks as $task)

        <li>TITLE: {{$task["title"]}}</li>
        <li>DESCRIPTION: {{$task["description"]}}</li>
        <li>DEADLINE: {{$task["deadline"]}}</li>
        <li>EMPLOYEE: {{$task -> employee -> first_name }} {{ $task -> employee -> last_name}}</li>
        <li>EMPLOYEE LOCATIONS:<br>
          <ul>
            @foreach ($task -> employee -> locations as $location)
              <li>
                <b>Street:</b> {{$location -> street}}
                <b>City:</b> {{$location -> city}} <b>State:</b> {{$location -> state}}
              </li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{route("edit", $task["id"])}}">Edit task</a></li>
        <hr>
      @endforeach

    </ul>
  </body>
  </html>
