<?php
namespace Strategies\Payment;

class ZarinpalPayment implements PaymentStrategyInterface
{
    public function pay(float $amount): string
    {
        return "Paid $amount using Zarin Pal.";
    }
}
