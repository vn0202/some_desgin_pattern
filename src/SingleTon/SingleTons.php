<?php
namespace  Vannghia\SomeDesginPattern\SingleTon;
class SingleTons {
    private static  $instance;
    private  function  __construct( ){


    }
    public  static  function  getInstance(){
        if(static::$instance === null)
        {
            return new SingleTons();
        }
        return static::$instance;
    }
}
