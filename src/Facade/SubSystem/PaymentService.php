<?php
namespace  Vannghia\SomeDesginPattern\Facade\SubSystem;
class PaymentService{

    public  function  payByCash(){
        return "Pay by Cash";
    }
    public  function  payByCreditCard(){
        return "Pay by Credit Card";
    }
}
