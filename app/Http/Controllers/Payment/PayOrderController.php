<?php

namespace App\Http\Controllers\Payment;

use App\Billing\PaymentGatewayContract;
use App\Http\Controllers\Controller;
use App\Order\OrderDetails;
use Illuminate\Http\Request;
use App\Billing\BankPaymentGateway;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGatewayContract $paymentGateway )
    {
        $order = $orderDetails->all();


        dd($paymentGateway->charge('2500'));
    }
}
