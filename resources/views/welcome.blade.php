<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>document</title>

       
    </head>

    <body>
   @foreach($tasks as $task)
   <h3>{{$task->name}}</h3>
   @endforeach
    </body>
</html>
