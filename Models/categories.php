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
        if($category == 'dog' || $category == 'cat'){
            $this->category = $category;
        }else {
            echo 'ERROR: Category not valid.';
            die();
        }
    }

    public function getCategory(){
        return $this->category;
    }

 }

 class FoodCategory extends PetCategory{
    
    public function setCategory($category){
        if($category == 'dry' || $category == 'wet'){
            $this->category = $category;
        }else {
            echo 'ERROR: Category not valid.';
            die();
        }
    }
    
 }