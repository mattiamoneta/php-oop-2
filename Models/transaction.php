<?php

/**
 * PURCHASE SYSTEM
 */

 class Transaction{
    protected $user;

    function __construct(User $_user){

        if($_user instanceof User){
            $this->user = $_user;
        } else {
            echo "ERROR: User not valid.";
            die();
        }
        
    }
 }