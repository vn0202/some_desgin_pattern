<?php
namespace  Vannghia\SomeDesginPattern\Facade;
use Vannghia\SomeDesginPattern\Facade\SubSystem\AccountService;
use Vannghia\SomeDesginPattern\Facade\SubSystem\EmailService;
use Vannghia\SomeDesginPattern\Facade\SubSystem\PaymentService;
use Vannghia\SomeDesginPattern\Facade\SubSystem\ShippingService;
class FacadeService{
    private  FacadeService $instance;
    private  AccountService $accountService;
    private EmailService $emailService;
    private PaymentService $paymentService;
    private ShippingService $shippingService;
    private  function __construct()
    {
        $this->accountService = new AccountService();
        $this->emailService = new EmailService();
        $this->paymentService = new PaymentService();
        $this->shippingService = new ShippingService();
    }
    public  static  function  getInstance(){
        return $instance ?? new FacadeService();
    }
    public function  byProductByCashWithFreeShipping(string $email){
        $result = $this->accountService->getAccount($email);
        $result .= $this->emailService->sendToEmail($email);
        $result .= $this->paymentService->payByCash();
        $result .= $this->shippingService->freeShipping();
        return $result;
    }
    public  function  byProductByCreditCardWithStandardShipping(string $email){
        $result = $this->accountService->getAccount($email);
        $result .= $this->emailService->sendToEmail($email);
        $result .= $this->paymentService->payByCreditCard();
        $result .= $this->shippingService->standardShipping();
        return $result;
    }


}
