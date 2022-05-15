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
    <title>Products</title>
    
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a id='aa' calss="navbar-brand" href="card.php">Mycard |vi</a>
</nav>
    <center>
        <h2 class='ava'>Available Products</h2>
    </center>
    <?php
    include('config.php');
    $select="SELECT * FROM prod";
    $result = mysqli_query($conn, $select);
    while($row = mysqli_fetch_array($result)){
        echo "
        <center class = 'center'>
        <main class='float-end ms-2 mt-2 border>
        <div class='card' style='width: 18rem;'>
            <img src='$row[image]'  class='card-img-top img'>
            <div class='card-body'>
                <h5 class='card-title'>$row[name]</h5>
                <p class='card-text'>$row[price]</p>
                <a href='val.php? id=$row[id]' class='btn btn-success'>Add Prodact  </a>
            </div>
        </div>
        </main>
        </center>";
    }
    
    ?>










    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>