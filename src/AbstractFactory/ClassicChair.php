<?php
namespace Vannghia\SomeDesginPattern\AbstractFactory;

use demo\abstract_factory\src\interfaces\Chair;

class ClassicChair implements  Chair{
    public  function  getModel()
    {
        // TODO: Implement getModel() method.
        return "It is Classic";
    }
    public  function  getType()
    {
        // TODO: Implement getType() method.
        return "this is chair";
    }
}