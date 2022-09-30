<?php
namespace  Vannghia\SomeDesginPattern\AbstractFactory;
use  Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Table;

class ClassicTable implements  Table{
    public  function  getModel()
    {
        // TODO: Implement getModel() method.
        return "This is Classic Table";
    }
    public  function  getType()
    {
        // TODO: Implement getType() method.
        return "This is Table";
    }
}