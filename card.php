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
    <title>MY car | My Products</title>
    
</head>

<body>
    <center>
        <h3>Your Product</h3>
        
    </center>
<?php
include ('config.php');

$result = mysqli_query($conn, "SELECT * FROM addcard");
while ($row =mysqli_fetch_array($result)){
    echo "    <center>
    <main class='main mt-5'>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>Product Name</th>
                    <th scope='col'>Product Price</th>
                    <th scope='col'>Delete item</th>
                </tr>
            </thead>
            <tbady>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>Delete Item</a></td>
                </tr>
            </tbady>
        </table>
    </main>
</center>";
}

?>
</body>
</html>



