<?php
namespace Strategies\Payment;

class SnapPayPayment implements PaymentStrategyInterface
{
    public function pay(float $amount): string
    {
        return "Paid $amount using SnapPay.";
    }
}
