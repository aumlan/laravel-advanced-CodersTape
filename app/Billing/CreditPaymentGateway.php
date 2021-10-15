<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGatewayContract
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

        // 3% Credit Card Fees
        $fees = $afterDiscountAmount * 0.03;

        return [
            'amount'=>$amount,
            'discount'=>$this->discount,
            'afterDiscount'=> $afterDiscountAmount,
            'creditCard_fees'=> $fees,
            'total'=> $afterDiscountAmount + $fees,
            'confirmation_number'=>Str::random(),
            'currency'=>$this->currency,
        ];
    }

}
