<?php
    #INCLUDES

    require_once __DIR__ . "/Models/product.php";
    require_once __DIR__ . "/Models/categories.php";

    $prodotto1 = new FoodProduct(
                                    "Titolo Prodotto",
                                    "lorem ipsum dolor sit amet",
                                    22,
                                    "https://www.pngall.com/wp-content/uploads/10/Pet-PNG-Photo.png", 
                                    new PetCategory('dog'), 
                                    new FoodCategory('dry'), 
                                    2
                                );

    $prodotto2 = new ToyProduct(
                                    "Titolo Prodotto",
                                    "lorem ipsum dolor sit amet",
                                    22,
                                    "https://www.pngall.com/wp-content/uploads/10/Pet-PNG-Photo.png", 
                                    new PetCategory('cat')
                                );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>PHP OOP 2</title>
</head>
    <body>
        <?php 
        var_dump($prodotto1); 
        var_dump($prodotto2);
        ?>
    </body>
</html>