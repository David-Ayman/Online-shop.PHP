<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
    include ('insert.php');
?>
    <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <h1>Online Shop</h1>
                <img src="images/images1.png" alt="logo" width="450px">
                
                <input type="text" placeholder="Product Name" name='name'> 
                <br>
                <br>
                
                <input type="text" placeholder="Product Price" name='price'> 
                <br>
                <br>
                <input type="file" name='image' id='file'  style='display:none;'>
                <label class="label" for="file">Choose Image Product</label>
                <button name='upload'>upload product ✅ </button>
                <br><br>
                <a href="products.php">Show All Products</a>
            </form>
            <br>
                <a href="shop.php">shop</a>
        </div>
        <p>Developer By David Ayman</p>
    </center>
</body>
</html>
<?php
include ('config.php');
?>