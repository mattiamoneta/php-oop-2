<?php

/**
 * PURCHASE SYSTEM
 */

 class CreditCard{
    protected $cardNumber;
    protected $cardExp;
    protected $CV2;

    function __construct($_cardNumber, $_cardExp, $_CV2){
        $this->cardNumber = $_cardNumber;
        $this->cardExp = $_cardExp;
        $this->CV2 = $_CV2;
    }

    public function getIfValid(){
        $currentDay = strtotime(date('d-m-Y'));
        $expDate = strtotime($this->cardExp);
        if($expDate < $currentDay){
            return false;
        }else{
            return true;
        }
    }

    public function getExpDate(){
       return $this->cardExp;
    }
 }