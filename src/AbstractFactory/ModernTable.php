<?php
namespace  Vannghia\SomeDesginPattern\AbstractFactory;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Table;
class ModernTable implements  Table{
    public  function  getModel()
    {
        // TODO: Implement getModel() method.
        return "This is modern table";
    }
    public  function  getType()
    {
        // TODO: Implement getType() method.
        return "This is a table";
    }
}