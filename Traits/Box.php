<?php

#Aggiunge la proprietà Size per indicare la dimensione della scatola
#per la spedizione. Implementato solo per i prodotti fisici, no digital.
trait ShippingBox{

    protected $size;
    protected $weight;

    public function setShippingBoxSize($box_size){
        $this->size = $box_size;
    }

    public function getShippingBoxSize(){
        return $this->size;
    }

    
    public function setShippingBoxWeight($box_weight){
        $this->size = $box_weight;
    }

    public function getShippingBoxWeight(){
        return $this->weight;
    }


}