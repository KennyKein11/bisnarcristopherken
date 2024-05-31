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
    <h1>Product Page</h1>

    <?php
        session_start();

        echo "<h2>" . "<p>" . "Product Name: " . "</p>". $_SESSION['pName'] . "</h2>";
        echo "<h2>" . "<p>" . "Product Price: " . "</p>" . $_SESSION['pPrice'] . "</h2>";
        echo "<h2>" . "<p>" . "Product Description: " . "</p>" . $_SESSION['pDesc'] . "</h2>";
        echo "<h2>" . "<p>" . "Product Stock: " . "</p>" . $_SESSION['pStock'] . "</h2>";
    ?>
</body>
</html>