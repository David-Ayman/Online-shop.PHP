<?php  
include ('config.php');
$ID=$_GET['id'];
$up = mysqli_query($conn , "SELECT * FROM prod WHERE id = $ID");
$data = mysqli_fetch_array($up);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Pay</title>
    <style>
        input{
            display: none;
        }
    </style>
</head>
<body>
<center>
    <div class="main">
        <form action="insert_card.php" method="POST">
            <h2>Pay this product ?</h2>
            <br>
            <input type="text" name='id'    value = "<?php echo $data ['id'] ?>">
            
            <input type="text" name='name'  value = "<?php echo $data ['name'] ?>" >

            <input type="text" name='price' value = "<?php echo $data ['price'] ?>"  >

            <button name ='add' type='sumbit' class='btn btn-warning'>Your Product in car</button>
            <br>
            <a style="text-decoration: none;" class='text-success ' href="shop.php">Back to your Products</a>
        </form>
    </div>



</center>







</body>