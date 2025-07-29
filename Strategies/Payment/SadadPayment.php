<?php
namespace Strategies\Payment;

class SadadPayment implements PaymentStrategyInterface
{
    public function pay(float $amount): string
    {
        return "Paid $amount using Sadad.";
    }
}
