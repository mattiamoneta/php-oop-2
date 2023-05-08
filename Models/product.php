<?php

/**
 * CLASSE PRODOTTO
 */

 class Product{

    protected $name;
    protected $price;
    protected $thumbnail;
    public $category;
    protected $description;
    protected $discount;


    function __construct(string $_name, string $_description, $_price, $_thumbnail, PetCategory $category){
        $this->name = $_name;

        try{
            if(!is_numeric($_price)){
                throw new Exception('Price cannot be a string');
            }else{
                $this->price = $_price;
            }

        }catch(Exception $e){
            echo $e->getMessage();
        }

       
        $this->thumbnail = $_thumbnail;
        $this->description = $_description;

        

        try{
            if(!$category instanceof PetCategory){
                throw new Exception("Not a valid pet category");
            }else{
                $this->category = $category;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }

        
    }

    #Set

    public function setName($name){
        $this->name = $name;
    }

    public function setDiscount($discount){
        try{
            if(!is_numeric($discount)){
                throw new Exception('Discount cannot be a string');
            }else{
                $this->discount = $discount;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }


    public function setDescription($description){
        $this->description = $description;
    }


    public function setPrice($price){
        

        try{
            if(!is_numeric($price)){
                throw new Exception('Price not numeric');
            }else{
                $this->price = $price;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function setThumbnail($thumbnail){
        $this->thumbnail = $thumbnail;
    }

    #Get

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getThumbnail(){
        return $this->thumbnail;
    }

    public function getDiscount(){
        return $this->discount;
    }

 }


 /**
  * FOOD
  */
 class FoodProduct extends Product{
    
    protected $netWeightKg;
    protected $foodCategory;
    

    function __construct($_name, $_description, $_price, $_thumbnail, PetCategory $_category, FoodCategory $_foodCategory, $_netWeightKg){
        
        parent::__construct($_name, $_description, $_price, $_thumbnail, $_category);

        $this->foodCategory = $_foodCategory;
        $this->netWeightKg = $_netWeightKg;
    }

    public static function getType(){
        return "Food";
    }

    public function getWeight(){
        return $this->netWeightKg;
    }

    public function getFood(){
        return $this->foodCategory->foodType;
    }

 }

  /**
  * TOYS
  */
  class ToyProduct extends Product{
    
    protected $toyFeatures = [];
    

    function __construct($_name, $_description, $_price, $_thumbnail, PetCategory $_category, $_toyFeatures){
        
        parent::__construct($_name, $_description, $_price, $_thumbnail, $_category);
        $this->toyFeatures = $_toyFeatures; 
    }

    public static function getType(){
        return "Toy";
    }

    public function getFeatures(){
        return $this->toyFeatures;
    }

 }

 /**
  * ACCESSORIES
  */

  class AccessoryProduct extends Product{
    function __construct($_name, $_description, $_price, $_thumbnail, PetCategory $_category){
        
        parent::__construct($_name, $_description, $_price, $_thumbnail, $_category);

    }

    public static function getType(){
        return "Accessory";
    }
  }