<?php

class Cab {
    
    public $cabType;
    public $luggage;
    public $distance1;
    public $distance2;

    function __construct($cabType,$luggage,$distance1,$distance2)
    {
        $this->distance1 = $distance1;
        $this->distance2 = $distance2;
        $this->cabType = $cabType;
        $this->luggage = $luggage;
    }

    function calculateFare(){

        switch($this->cabType){

        case 'CedMini':
           $miniFixed=150;
           if($this->distance1>$this->distance2){
               $distance = $this->distance1-$this->distance2;
               if($distance<=10){
                   $fare = $distance*14.50;
                   $fare+=$miniFixed;
                   return $fare;
               }else{
                   
               }
           }else{
               $distance = $this->distance2-$this->distance1;
               if($distance<=10){
                   $fare = $distance*14.50;
                   $fare+=$miniFixed;
                   return $fare;
               }
           }
            

        }
    }

}