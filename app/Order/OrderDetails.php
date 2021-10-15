<?php

namespace App\Order;

use App\Billing\PaymentGatewayContract;
use Illuminate\Support\Str;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(500);

        return [
            'name'=> 'Order-1',
            'address'=> '77/A Baker Street'
        ];
    }
}
