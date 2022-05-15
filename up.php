<?php
include ('config.php');


if(isset ($_POST['updata'])){
    $ID = $_POST['id'];
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $Image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name =$_FILES['image']['name'];
    $image_up ="images/".$image_name;
    $updata = "UPDATE prod SET name='$Name' , price='$Price' , image='$image_up' WHERE id=$ID ";
    mysqli_query($conn, $updata);
    
    // if(move_uploaded_file($image_location, 'images/'.$image_name)){
    //     echo "<script>alert ('image uploaded')</script>";

    // }else {
    //     echo "<script>alert ('image not uploaded')</script>";
    // }
    header('location: products.php');
}

?>







<?php/*
include ('config.php');


if(isset ($_POST['update'])){
    $ID = $_POST['id'];
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $Image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
    $update = "UPDATE  prod SET  name = '$Name', price='$Price',image = '$image_up' WHERE id = $ID";
    mysqli_query($conn, $update);
    if(move_uploaded_file($image_location, 'images/'.$image_name)){
        echo "<script>alert ('image uploaded')</script>";

    }else {
        echo "<script>alert ('image not uploaded')</script>";
    }
    header('location: products.php');
}
*/
?>