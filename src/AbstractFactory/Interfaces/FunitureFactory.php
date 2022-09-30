<?php
namespace Vannghia\SomeDesginPattern\AbstractFactory\Interfaces;
interface  FunitureFactory{
    public  function  createChair():Chair;
    public  function  createSofa(): Sofa;
    public  function  createTable(): Table;
}