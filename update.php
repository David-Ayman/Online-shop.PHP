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
    <title>Update Product</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
include ('config.php');
$ID = $_GET['id'];
$update= "SELECT * FROM prod  WHERE id = $ID";
$up= mysqli_query($conn , $update);
$data = mysqli_fetch_array($up);
?>
    <center>
        <div class="main">
            <form action="up.php" method="POST" enctype="multipart/form-data">
                <h1>Update Product</h1>
                <br>
                <br>
                <input type="text"  name='id' value='<?php echo $data['id']?>'>
                <br>
                <br>
                <input type="text"  name='name'value='<?php echo $data['name']?>'>
                <br>
                <br>
                <input type="text"  name='price' value='<?php echo $data['price']?>'  >
                <br>
                <br>
                <input type="file" name='image' id='file'  style='display:none;'>
                <label for="file">change Image Product</label>
                <button name='updata' type='submit'>update product  </button>
                <br><br>
                <a href="products.php">Show All Products</a>
            </form>
        </div>
        <p>Developer By David Ayman</p>
    </center>
</body>
</html>
