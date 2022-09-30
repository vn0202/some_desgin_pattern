<?php
namespace Vannghia\SomeDesginPattern\Observer;
use Vannghia\SomeDesginPattern\Observer\Interfaces\IObserver;
use Vannghia\SomeDesginPattern\Observer\Interfaces\ISubject;

class Subject implements  ISubject{
    private  $listObserver = [];
    public  function addObserver(IObserver $observer)
    {
        // TODO: Implement addObserver() method.
        $this->listObserver[] = $observer;
    }
    public  function  removeObserver(IObserver $observer)
    {
        // TODO: Implement removeObserver() method.
    }
    public  function  notify($message)
    {
        // TODO: Implement notify() method.
        foreach ($this->listObserver as $observer){
            $observer->update($message);
        }
    }
}