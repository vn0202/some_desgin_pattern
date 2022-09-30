<?php
namespace  Vannghia\SomeDesginPattern\AbstractFactory;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Sofa;

class ModernSofa implements  Sofa{
    public  function  getModel()
    {
        // TODO: Implement getModel() method.
        return "this is modern sofa";
    }
    public  function getType()
    {
        // TODO: Implement getType() method.
        return "This is sofa";
    }
}