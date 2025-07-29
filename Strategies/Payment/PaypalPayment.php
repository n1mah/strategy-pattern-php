<?php
namespace Strategies\Payment;

class PaypalPayment implements PaymentStrategyInterface
{
    public function pay(float $amount): string
    {
        return "Paid $amount using Paypal.";
    }
}
