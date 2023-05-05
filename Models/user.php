<?php

/**
 * USER
*/

class User{
    protected $cart = [];

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

}


class UserLogged extends User{

    protected $username;
    protected $name;
    protected $lastname;
    protected $dateOfBirth;

    function __construct($_username, $_name, $_lastname, $_dateOfBirth){

        $this->username = $_username;
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->dateOfBirth = $_dateOfBirth;
    }
}