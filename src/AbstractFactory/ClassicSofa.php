<?php
namespace  Vannghia\SomeDesginPattern\AbstractFactory;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Sofa;
class ClassicSofa implements  Sofa{
    public  function  getModel()
    {
        // TODO: Implement getModel() method.
        return "It is Classic";
    }
    public function  getType()
    {
        // TODO: Implement getType() method.
        return "This is Classic sofa";
    }
}