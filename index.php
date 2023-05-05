<?php
    #INCLUDES

    require_once __DIR__ . "/Models/product.php";
    require_once __DIR__ . "/Models/categories.php";
    require_once __DIR__ . "/Models/user.php";
    require_once __DIR__ . "/Models/transaction.php";
    require_once __DIR__ . "/local_db.php";

    #Add a new LOGGED user
    $marioRossi = new UserLogged("mariorossi01", "Mario", "Rossi", "01/01/1980");
    $marioRossi->addToCart($catalog[0]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PHP OOP 2</title>
</head>
    <body>
        <header>
            <nav class="navbar bg-body-tertiary">
                <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Pet Shop</span>
                </div>
            </nav>
        </header>
       <main>
            <div class="container">
                <div class="row row-cols-4 py-5">
                    <?php
                        foreach($catalog as $item){
                            echo " 
                                <div class=\"col\">
                                    <div class=\"card\">
                                        <img src=\"{$item->getThumbnail()}\" class=\"card-img-top\" alt=\"...\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">{$item->getName()}</h5>
                                            <p class=\"card-text\">{$item->getDescription()}</p>
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <a href=\"#\" class=\"btn btn-success\">BUY NOW</a>
                                                <i class=\"fa-solid fa-{$item->category->getCategory()}\"></i>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                             ";
                        }
                    ?>

                   

                </div>
            </div>
       </main>
    </body>
</html>