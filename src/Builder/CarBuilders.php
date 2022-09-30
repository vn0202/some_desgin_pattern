<?php
namespace  Vannghia\SomeDesginPattern\Builder;
 use Vannghia\SomeDesginPattern\Builder\Interfaces\Builders;

 class CarBuilders implements  Builders {
     private   $color ;
     private   $model;
     private  $price;
     private  $brand;
     public  function addColor(string $color):CarBuilders
     {
         // TODO: Implement addColor() method.
         $this->color = $color;
         return $this;

     }
     public  function  addBrand(string $brand):CarBuilders
     {
         // TODO: Implement addBrand() method.
         $this->brand = $brand;
         return $this;
     }
     public  function  addModel(string $model):CarBuilders
     {
         // TODO: Implement addModel() method.
         $this->model = $model;
         return $this;
     }
     public  function  addPrice(float $price):CarBuilders
     {
         // TODO: Implement addPrice() method.
         $this->price = $price;
         return $this;
     }
     public  function  bulid(): Car
     {
         // TODO: Implement bulid() method.
          return new  Car($this->color,$this->model,$this->price,$this->brand);
     }
 }