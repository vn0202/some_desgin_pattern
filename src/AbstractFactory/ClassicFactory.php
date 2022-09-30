<?php

namespace Vannghia\SomeDesginPattern\AbstractFactory;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Chair;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\FunitureFactory;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Sofa;
use Vannghia\SomeDesginPattern\AbstractFactory\Interfaces\Table;

  class ClassicFactory implements  FunitureFactory{
      public  function  createChair(): Chair
      {
          // TODO: Implement createChair() method.
          return new ClassicChair();

      }
      public  function  createSofa(): Sofa
      {
          // TODO: Implement createSofa() method.
          return new ClassicSofa();
      }
      public  function createTable(): Table
      {
          // TODO: Implement createTable() method.
          return new ClassicTable();
      }
  }