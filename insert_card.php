<?php
include('config.php');

if(isset($_POST['add'])){
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $insert = "INSERT INTO addcard (name, price)VALUES ('$Name','$Price')";
    mysqli_query($conn, $insert);
    header('location:card.php');
}





?>