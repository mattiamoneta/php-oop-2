<?php

/**
 * CLASS CATEGORIES
 */

 class PetCategory {
    protected $category;

    function __construct($_category){
        $this->category = $_category;
    }

    public function setCategory($category){

        try{
            if($category == 'dog' || $category == 'cat'){
                $this->category = $category;
            }else {
               throw new Exception('Not a valid category');
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function getCategory(){
        return $this->category;
    }

 }

 class FoodCategory extends PetCategory{

    public $foodType;

    function __construct($_foodType){
        $this->foodType = $_foodType;
    }

    
    public function setCategory($foodType){
        if($foodType == 'dry' || $foodType == 'wet'){
            $this->foodType = $foodType;
        }else {
            echo 'ERROR: Category not valid.';
            die();
        }
    }
    
 }