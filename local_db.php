<?php

/**
 * LOCAL PRODUCTS DATABASE
 */

    $catalog = [

        new FoodProduct(
            "Random Food for Dog",
            "lorem ipsum dolor sit amet",
            22.00,
            "https://arcaplanet.vtexassets.com/arquivos/ids/268536/edgard-cooper-dog-adult-bio-organic-pollo-e-tacchino-front.jpg?v=1768484098", 
            new PetCategory('dog'), 
            new FoodCategory('dry'), 
            2
        ),

        new ToyProduct(
            "Random Toy for Cat",
            "lorem ipsum dolor sit amet",
            19.99,
            "https://arcaplanet.vtexassets.com/arquivos/ids/277678/Gioco-gatto-Zip-PetSafe.jpg?v=1769386907", 
            new PetCategory('cat'),
            [
                'feature01',
                'feature02',
                'feature03',
                'feature04',
                'feature05'
            ]
        ),

        new AccessoryProduct(
            "Random Accessory for Cat",
            "lorem ipsum dolor sit amet",
            8.50,
            "https://arcaplanet.vtexassets.com/arquivos/ids/278835/lovedi-cuscino-basic.jpg?v=1769127244", 
            new PetCategory('cat'),
            [
                'feature01',
                'feature02',
                'feature03',
                'feature04',
                'feature05'
            ]
            ),

            new DigitalProduct(
                "eBook",
                "lorem ipsum dolor sit amet",
                8.50,
                "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/51f+ToVzKYL.jpg", 
                new PetCategory('cat')
                
            )
    ];



    #Utilizza la Trait che indica la dimensione della scatola da usare 
    #per spedire il prodotto al cliente. Funziona solo su prodotti non-digital.

    $catalog[2]->setShippingBoxSize('L');
    $catalog[1]->setShippingBoxSize('M');
    $catalog[0]->setShippingBoxSize('S');
    





    





