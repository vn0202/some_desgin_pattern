<?php
namespace  Vannghia\SomeDesginPattern\FactoryMethod;
use Vannghia\SomeDesginPattern\FactoryMethod\Interfaces\Animal;

class Dog implements  Animal{
    public  function  getName()
    {
        // TODO: Implement getName() method.
        return "It is a Dog";
    }
}