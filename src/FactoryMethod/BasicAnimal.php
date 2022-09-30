<?php
namespace  Vannghia\SomeDesginPattern\FactoryMethod;
use Vannghia\SomeDesginPattern\FactoryMethod\Interfaces\Animal;



class  BasicAnimal extends  AnimalFactory{
   protected  static  $type = 0;

    public  function  createAnimal(): Animal
    {
        // TODO: Implement createAnimal() method.
        if(self::$type == 0 ){
            self::$type++;
            return new Dog();
        }elseif(self::$type == 1){
            self::$type++;
            return new Cat();
        }else{
            self::$type =0;
            return new Duck();
        }


    }
}