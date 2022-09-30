<?php
require  "../vendor/autoload.php";

 // abstract factory

//$test = new \Vannghia\SomeDesginPattern\AbstractFactory\ModernFactory();

// Builder
$test = (new \Vannghia\SomeDesginPattern\Builder\CarBuilders())
    ->addColor('Black')
    ->addBrand('VinFast')
    ->addModel('Vin-E85')
    ->addPrice(1999.8);
// FacadeService
$test = \Vannghia\SomeDesginPattern\Facade\FacadeService::getInstance()->byProductByCashWithFreeShipping('nghiavuxp0202@gmail.com');

// Factory method

//$test = (new \Vannghia\SomeDesginPattern\FactoryMethod\RandomAnimal())->createAnimal();
//$test2 = (new \Vannghia\SomeDesginPattern\FactoryMethod\BasicAnimal());
//
//for($i = 0; $i < 5; $i++)
//{
//    var_dump($test2->createAnimal());
//}
// SingleTons
$test3 = \Vannghia\SomeDesginPattern\SingleTon\SingleTons::getInstance();


// observer
$test = new \Vannghia\SomeDesginPattern\Observer\Subject();
$observer1 = new \Vannghia\SomeDesginPattern\Observer\Observers();
$observer2 = new \Vannghia\SomeDesginPattern\Observer\Observers();
$test->addObserver($observer1);
$test->notify('Update lan 1');
//echo $observer1->getState();
echo $observer2->getState();
$test->addObserver($observer2);
$test->notify("Update lan 2");
echo $observer2->getState();
