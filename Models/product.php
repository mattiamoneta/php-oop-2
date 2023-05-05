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


    function __construct($_name, $_description, $_price, $_thumbnail, PetCategory $category){
        $this->name = $_name;
        $this->price = $_price;
        $this->thumbnail = $_thumbnail;
        $this->description = $_description;

        if(!$category instanceof PetCategory){
            echo "ERROR: Category not valid";
            die();
        }else{
            $this->category = $category;
        }

        
    }

    #Set

    public function setName($name){
        $this->name = $name;
    }

    public function setDescription($description){
        $this->description = $description;
    }


    public function setPrice($price){
        $this->price = $price;
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