<?php
namespace  Vannghia\SomeDesginPattern\Builder;

class Car {
     private   $color ;
     private   $model;
     private  $price;
     private  $brand;
     public  function  __construct(string $color, string $model, float $price, string  $brand){
         $this->color = $color;
         $this->model = $model;
         $this->brand = $brand;
         $this->price  = $price;
     }
 }
