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
        <li>EMPLOYEE_ID: {{$task["employee_id"]}}</li>
        <hr>
      @endforeach

    </ul>
  </body>
</html>
