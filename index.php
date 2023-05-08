<?php
    #INCLUDES

    require_once __DIR__ . "/Models/product.php";
    require_once __DIR__ . "/Models/categories.php";
    require_once __DIR__ . "/Models/user.php";
    require_once __DIR__ . "/Models/creditCard.php";
    require_once __DIR__ . "/local_db.php";


    #Add a new LOGGED user
    $credit = new CreditCard("1234567890123","01-05-2023","123");
    $user = new UserLogged($credit, "mariorossi01", "Mario", "Rossi", "01/01/1980");
    
    #Uncomment to use Host account (no discount)
    #$user = new User($credit);
    $user->addToCart($catalog[0]);

    #Add discount to item
    $catalog[2]->setDiscount(20);


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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PetShop</a>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropstart">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php
                            if($user instanceof UserLogged){
                                echo $user->getUsername();
                            }else{
                                echo "Host";
                            }
                        ?>
                    </a>
                    <ul class="dropdown-menu">
                        <h6 class="ms-3">Cart</h6>
                        <li><hr class="dropdown-divider"></li>
                        <h3 class="ms-3"><?php echo "{$user->getCartTotal()} €"  ?></h3>
                        <?php
                             if($user instanceof UserLogged){
                                echo "<span class=\"text-danger ms-3\">Discount -20%</span>";
                             }
                        ?>

                        <?php 
                            if($user->validateCreditCard() == false){
                                echo "<div class=\"ms-3\">
                                        <button class=\"btn btn-muted mt-4\" disabled>BUY NOW</button>
                                        </div>
                                        <div class=\"small text-danger ms-3\">Credit Card expiry in date {$user->cardExp()}</div>
                                     ";
                            }else{
                                echo " <button class=\"btn btn-success mt-4\">BUY NOW</button>";
                            }
                            
                        ?>
                        
                        
                    </ul>
                    </li>
                </ul>
                </div>
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
                                            <p class=\"card-text\">{$item->getDescription()}</p>";

                                            if($item instanceof FoodProduct){
                                                echo "
                                                        <div class=\"small fst-italic\">({$item->getFood()} food)</div>
                                                        <div class=\"fw-bold mb-4\">{$item->getWeight()} Kg</div>
                                                    ";
                                            } else if ($item instanceof ToyProduct){
                                                
                                                echo "<ul>";
                                                foreach($item->getFeatures() as $feature){
                                                    echo "<li>{$feature}</li>";
                                                }   
                                                echo "</ul>";
                                                
                                            }

                                        echo "<div class=\"mb-3\">
                                                <h5>€ {$item->getPrice()}</h5>
                                            </div>
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <a href=\"#\" class=\"btn btn-success\">BUY NOW</a>
                                                <span class=\"small\">{$item::getType()}</span>
                                                <i class=\"fa-solid fa-{$item->category->getCategory()}\"></i>
                                            </div>";

                                            
                                    echo "
                                            
                                        </div>
                                        </div>
                                    </div>
                             ";
                        }
                    ?>

                   

                </div>
            </div>
       </main>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>