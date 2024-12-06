<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Create New Task</h2>
        <form action="{{route('updated_details',$edit_tasks->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="task-title">Task Title:</label>
                <input type="text" id="task-title" name="title" value="{{$edit_tasks->title}}" required>
            </div>
            <div class="form-group">
                <label for="task-description">Description:</label>
                <textarea name="description" rows="4" required>{{$edit_tasks->description}}</textarea>
            </div>
            <button type="submit">Update Task</button>
        </form>
    </div>

</body>
</html>
