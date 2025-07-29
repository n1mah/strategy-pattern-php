<?php
namespace Services;

use Strategies\Payment\PaymentStrategyInterface;

class PaymentService {

    public function __construct(private PaymentStrategyInterface $strategy) {}

    public function pay(float $amount): string {
        return $this->strategy->pay($amount);
    }

    public function setStrategy(PaymentStrategyInterface $strategy): void {
        $this->strategy = $strategy;
    }
}
