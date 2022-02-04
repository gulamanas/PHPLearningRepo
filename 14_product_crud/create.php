<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Product CRUD</title>
</head>

<body>
    <h1>Create new Product</h1>

    <form method="get">
        <div class="form-group">
            <label>Product Image</label> <br>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <label>Product Title</label>
            <input type="text" name="product" class="form-control">
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="number" step=".01" name="price" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</body>

</html>