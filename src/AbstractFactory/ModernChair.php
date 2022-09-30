<?php
namespace  Vannghia\SomeDesginPattern\AbstractFactory;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Chair;

class ModernChair implements  Chair{
    public  function  getType()
    {
        // TODO: Implement getType() method.
        return "This is modern chair";
    }
    public  function  getModel()
    {
        // TODO: Implement getModel() method.
        return "It is modern";
    }
}