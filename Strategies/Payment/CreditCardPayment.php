<?php
namespace Strategies\Payment;

class CreditCardPayment implements PaymentStrategyInterface
{
    public function pay(float $amount): string
    {
        return "Paid $amount using CreditCard.";
    }
}
