<?php

include_once "dbcon.php";

session_start();

if(isset($_POST["Submit"])){
   
    $Product = $_POST["Product"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $stock = $_POST["stock"];

    $query = "insert into product(Product, Price, Description, Stock) values(?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssss', $Product_Name, $Product_Price, $Product_Description, $Product_Stock);
    $stmt->execute();

    echo "<script>alert('Product Added!')</script>";

    $stmt->close();

    $_SESSION["pName"] = $Product_Name;
    $_SESSION["pPrice"] = $Product_Price;
    $_SESSION["pDesc"] = $Product_Description;
    $_SESSION["pStock"] = $Product_Stock;

    header('Location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel = "stylesheet" href = "styles.css">
</head>
<body>
    <h1>Product Input Page</h1>

    <form method = "post">
        <h2 class = "pLabel"><label for = "text"> Name: </label>
        <input type = "text" name = "Product_Name" class = "in">

        <h2 class = "pLabel"><label for = "text"> Price: </label>
        <input type = "number" name = "Product_Price" class = "in">

        <h2 class = "pLabel"><label for = "text"> Description: </label>
        <textarea name ="Product_Description" rows = "2" placeholder = "Enter description here..." class = "in"></textarea><br>

        <h2 class = "pLabel"><label for = "text"> Stock: </label>
        <input type = "number" name = "Product_Stock" class = "in"><br></h2>

        <input type = "submit" name = "Submit" id = "sub">
    </form>
</body>
</html>