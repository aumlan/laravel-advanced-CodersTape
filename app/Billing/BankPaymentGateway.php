<?php

namespace App\Billing;

use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function Charge($amount)
    {
        //Charge the Bank

        $afterDiscountAmount = $amount - $this->discount;

        return [
            'amount'=>$amount,
            'discount'=>$this->discount,
            'afterDiscount'=> $afterDiscountAmount,
            'total'=> $afterDiscountAmount ,
            'confirmation_number'=>Str::random(),
            'currency'=>$this->currency,
        ];
    }

}
