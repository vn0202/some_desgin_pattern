<?php
namespace  Vannghia\SomeDesginPattern\Facade\SubSystem;
class ShippingService{
    public  function  freeShipping(){
        return "Free to ship";
    }
    public  function  standardShipping(){
        return "Ship by standard";
    }

}