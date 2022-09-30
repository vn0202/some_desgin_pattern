<?php

namespace  Vannghia\SomeDesginPattern\FactoryMethod;
use Vannghia\SomeDesginPattern\FactoryMethod\Interfaces\Animal;

abstract  class  AnimalFactory
{
     abstract  public function createAnimal():Animal;
}
