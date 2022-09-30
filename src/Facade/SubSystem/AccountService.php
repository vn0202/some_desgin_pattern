<?php
namespace  Vannghia\SomeDesginPattern\Facade\SubSystem;

class AccountService{
    public  function getAccount(string $email){
        return "Getting account of " . $email;
    }
}