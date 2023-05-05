<?php

/**
 * USER
*/

class User{
    protected $cart = [];
    protected $creditCard;

    function __construct(CreditCard $_creditCard){
        $this->creditCard = $_creditCard;
    }

    public function addToCart(Product $item){
        if(!$item instanceof Product){
            echo "ERROR: Not a product";
            die();
        }else{
            $this->cart[] = $item;
        }
    }

    public function getCart(){
        return $this->cart;
    }

    public function getCartTotal(){
        $total = 0;
        foreach($this->cart as $product){
            $total += $product->getPrice();
        }
        return $total;
    }

    public function validateCreditCard(){
        return $this->creditCard->getIfValid();
    }
    
    public function cardExp(){
        return $this->creditCard->getExpDate();
    }

}


class UserLogged extends User{

    protected $username;
    protected $name;
    protected $lastname;
    protected $dateOfBirth;

    function __construct($_creditCard, $_username, $_name, $_lastname, $_dateOfBirth){

        parent::__construct($_creditCard);

        $this->username = $_username;
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->dateOfBirth = $_dateOfBirth;
    }

    public function getUsername(){
        return $this->username;
    }

    #Add Discount for logged user
    public function getCartTotal(){
        $total = 0;
        foreach($this->cart as $product){
            $total += $product->getPrice();
        }
        
        $discount = $total * 0.2;
        $total -= $discount; 

        return $total;
    }
}