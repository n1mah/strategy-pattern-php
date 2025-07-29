<?php

require_once __DIR__ . '/Services/PaymentService.php';

use Services\PaymentService;
use Strategies\Payment\CashPayment;
use Strategies\Payment\CreditCardPayment;
use Strategies\Payment\PaypalPayment;
use Strategies\Payment\SadadPayment;
use Strategies\Payment\SnapPayPayment;
use Strategies\Payment\ZarinpalPayment;

$paymentService = new PaymentService(new CashPayment());
echo $paymentService->pay(120.50) . "</br>";

$paymentService->setStrategy(new ZarinpalPayment());
echo $paymentService->pay(75.00) . "</br>";

$paymentService->setStrategy(new PaypalPayment());
echo $paymentService->pay(100) . "</br>";

$paymentService2 = new PaymentService(new CreditCardPayment());
echo $paymentService2->pay(200) . "</br>";

$paymentService3 = new PaymentService(new SadadPayment());
echo $paymentService3->pay(220) . "</br>";

$paymentService4 = new PaymentService(new SnapPayPayment());
echo $paymentService4->pay(100.50) . "</br>";

