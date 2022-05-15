<?php
include('config.php');

$ID = $_GET['id'];
$delete ="DELETE FROM prod WHERE id = $ID";
mysqli_query($conn , $delete);
header('location:products.php');
?>