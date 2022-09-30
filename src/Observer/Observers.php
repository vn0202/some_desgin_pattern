<?php
namespace Vannghia\SomeDesginPattern\Observer;
use Vannghia\SomeDesginPattern\Observer\Interfaces\IObserver;

class Observers implements  IObserver{
    private $state ;
    public  function  update($message = null)
    {
        // TODO: Implement update() method.
        $this->state = "Subject has just change.. This is message ". $message;

    }
    public function  getState(){
        return $this->state;
    }

}