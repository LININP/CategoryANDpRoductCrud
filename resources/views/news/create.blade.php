<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 0;
    }
    form {
      max-width: 400px;
      margin: auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background: #f9f9f9;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input, select, textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    button {
      background: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    button:hover {
      background: #45a049;
    }
  </style>
</head>
<body>

  <form action="{{route('store_news')}}" method="POST" enctype="multipart/form-data">
@csrf
    <!-- News Title -->
    <div class="form-group">
      <label for="news-title">News Title:</label>
      <input type="text" id="news-title" name="title" placeholder="Enter news title" required>
    </div>

    <!-- Date -->
    <div class="form-group">
      <label for="news-date">Date:</label>
      <input type="date" id="news-date" name="date" required>
    </div>

    <!-- Short Description -->
    <div class="form-group">
      <label for="short-description">Short Description:</label>
      <textarea id="short-description" name="short_description" rows="2" placeholder="Enter a short description"></textarea>
    </div>

    <!-- Description -->
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea id="description" name="description" rows="4" placeholder="Enter detailed description"></textarea>
    </div>

    <!-- Image -->
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" id="image" name="image" accept="image/*" required>
    </div>

    <!-- Submit Button -->
    <button type="submit">Submit</button>
  </form>

</body>
</html>
