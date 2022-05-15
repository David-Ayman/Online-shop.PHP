<?php
include ('config.php');



$validName = "";
$validPrice = "";

if(isset ($_POST['upload'])){
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $Image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name =$_FILES['image']['name'];
    $image_up ="images/".$image_name;

    if(empty ($Name) || empty($Price)) {
        if (empty ($Name)){
            $validName = "Name is REquerd";
        }
        if(empty ($Price)){
            $validPrice = "price is REquerd";

        }
    }else {
        $insert = "INSERT INTO prod  (name , price, image) VALUES ('$Name' , '$Price' , '$image_up')";
        mysqli_query($conn, $insert);
    }

    header('location: index.php');
}

?>





