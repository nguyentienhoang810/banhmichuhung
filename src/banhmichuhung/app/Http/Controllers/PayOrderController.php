<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGatewayContract;
use App\Order\OrderDetails;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGatewayContract $paymentGateway) {
        $order = $orderDetails->all();
        // $paymentGateway = new PaymentGateway('usd');
        dd($paymentGateway->charge(5000));
    }
}
