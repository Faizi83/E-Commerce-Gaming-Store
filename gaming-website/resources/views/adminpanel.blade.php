<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Admin Panel - Add Product</h2>
  
  <form action="{{url('/')}}/add-product" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Product Name -->
    <div class="form-group">
      <label for="productName">Product Name:</label>
      <input type="text" class="form-control" id="productName" name="productName" required>
      
    </div>

    <div class="form-group">
      <label >Product Category:</label>
      <input type="text" class="form-control"  name="category" required>
      
    </div>

    <!-- Product Price -->
    <div class="form-group">
      <label for="productPrice">Product Price:</label>
      <input  class="form-control" id="productPrice" name="productPrice" required>
    </div>
    <div class="form-group">
      <label for="productPrice">Product del Price:</label>
      <input  class="form-control" id="productPrice" name="productdelPrice" required>
    </div>

    <!-- Product Rating -->
    <div class="form-group">
      <label for="productRating">Product Rating:</label>
      <input type="number"  class="form-control" id="productRating" name="productRating" min="1" max="5" required>

    </div>

    <div class="form-group">
      <label for="productDesc">Product Description:</label>
      <input type="text"  class="form-control"  name="productDesc" required>
    </div>

    <!-- Product Image Upload -->
    <div class="form-group">
      <label for="productImage">Product Image:</label>
      <input type="file" class="form-control-file" id="productImage" name="productImage" accept="image/*" required>

    </div>

    <button type="submit" class="btn btn-primary">Add Product</button>

  </form>
</div>

