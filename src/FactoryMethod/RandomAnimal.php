<?php
namespace  Vannghia\SomeDesginPattern\FactoryMethod;
use Vannghia\SomeDesginPattern\FactoryMethod\Interfaces\Animal;


class RandomAnimal extends AnimalFactory{


    public  function  createAnimal():Animal
    {
        $type = random_int(0,2);
     if($type == 0)
     {
         return new Dog();
     }
     elseif($type == 1){
         return new Cat();
     }
     else{
         return new Duck();
     }

    }
}