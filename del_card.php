<?php
include('config.php');

$ID = $_GET['id'];
mysqli_query($conn , "DELETE * FROM addcard where id = $ID");
header('location: card.php');
?>