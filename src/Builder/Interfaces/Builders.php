<?php
namespace  Vannghia\SomeDesginPattern\Builder\Interfaces;
use Vannghia\SomeDesginPattern\Builder\Car;
use Vannghia\SomeDesginPattern\Builder\CarBuilders;

 interface  Builders{
public  function  addColor(string  $color): CarBuilders;
public  function  addBrand(string  $brand): CarBuilders;
public  function  addPrice(float $price): CarBuilders;
public  function  addModel(string  $model): CarBuilders;
public  function  bulid():Car;
 }
