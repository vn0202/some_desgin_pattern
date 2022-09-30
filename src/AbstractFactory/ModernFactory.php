<?php
namespace  Vannghia\SomeDesginPattern\AbstractFactory;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Chair;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\FunitureFactory;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Sofa;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Table;


  class ModernFactory implements  FunitureFactory{
      public  function  createSofa(): Sofa
      {
          // TODO: Implement createSofa() method.
           return new ModernSofa();
      }
      public  function  createChair(): Chair
      {
          // TODO: Implement createChair() method.
           return new ModernChair();
      }
      public  function  createTable(): Table
      {
          // TODO: Implement createTable() method.
           return new ModernTable();
      }
  }