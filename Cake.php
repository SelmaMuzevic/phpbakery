<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cake
 *
 * @author selma
 */
class Cake {
    public $name;
    public $price;
    public $image;
    public $ingredients;
    
    function __construct($name, $price, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
       
        
    }
    
    function afficheImage(){
        return '<img style="width: 150px" src="'.$this->image . '"/>';
    }
    
     public function __toString(){
        return  $this->name. ' ' .$this->price
            . ' ' .$this->image. '<br/>'; 
}
}

