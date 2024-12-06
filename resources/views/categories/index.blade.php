<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<a href="{{route('addpage')}}">Add Category</a>
<p><br><br></p>



    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key=> $category )
            <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$category->title}}</td>
            <td><a href="{{route('cat_edit',['category'=>$category])}}">Edit</a><br><br>
            <form action="{{route('cat_deleted',['category'=>$category])}}" method="post"><button>Delete</button>

                    @csrf
                    @method('DELETE')
                    </form>


                </td>
          </tr>
          @endforeach

        </tbody>
      </table>






</body>
</html>
