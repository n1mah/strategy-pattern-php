<?php
namespace Strategies\Payment;

interface PaymentStrategyInterface {
    public function pay(float $amount): string;
}