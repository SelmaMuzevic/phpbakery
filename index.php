<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './Cake.php';

$cakes[] = new Cake("fraisier", 15, "cake1.jpg");
$cakes[] = new Cake("Gateau aux fruits", 20, "cake2.jpg");
$cakes[] = new Cake("Gateau d'été", 20, "cake3.jpeg");
    

foreach($cakes as $c){
     echo $c->afficheImage();
     echo $c->name . ' ' .$c->price. ' ' .$c->image. '<br/>'; 
}
   


