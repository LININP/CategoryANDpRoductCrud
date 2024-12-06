<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



    <title>Laravel</title>
</head>
<body>
<p><br><br></p>
    <table class="table table-striped table-light">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tilte</th>
            <th scope="col">Description</th>
         </tr>
        </thead>
        <tbody>

            @foreach ( $tasks as $task )

            <tr>
            <th scope="row">{{$task->id}}</th>
            <td>{{$task->title}}</td>
            <td>{{$task->description}}</td>


        <td><button><a href="{{route('show_edit_task',$task->id)}}">Edit</button></a></td>
        <td><form action="{{route('updated',$task->id)}}" method="post">


        <button>Delete</button></td>
        @csrf
@method('DELETE')
</form>
    </tr>
        </tbody>
        @endforeach
      </table>


</body>
</html>
