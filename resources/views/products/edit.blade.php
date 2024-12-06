<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Form</title>
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

  <form action="{{route('updated_products',['product'=>$product])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="category">Category:</label>
      <select id="category" name="category_id" required>
        <option value="">-- Select Category --</option>
        @foreach ($categories as $category)

            <option value="{{$category->id}}"
            @if($category->id == $product->category_id) selected @endif>
            {{ $category->title }}
            </option>
            @endforeach

    </select>



    </div>

    <div class="form-group">
      <label for="product-name">Product Name:</label>
      <input type="text" id="product-name" name="product_title" value="{{$product->product_title}}" placeholder="Enter product name" required>
    </div>

    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" id="price" name="price" value="{{$product->price}}" placeholder="Enter price" step="0.01" required>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea id="description" name="description" rows="4" placeholder="Enter product description">{{$product->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Image:</label>
        @if($product->image)
            <div>
            <img src="{{asset('uploads/'.$product->image)}}" alt="Product Image" style="max-width: 200px; margin-bottom: 10px;">
            </div>
        @endif
        <input type="file" id="image" name="image" accept="image/*">
    </div>

    <button type="submit">Submit</button>
  </form>

</body>
</html>
