<?php
namespace  Vannghia\SomeDesginPattern\Facade\SubSystem;
class EmailService{
    public  function  sendToEmail(string $email){
        return "Send email to " . $email;
    }
}