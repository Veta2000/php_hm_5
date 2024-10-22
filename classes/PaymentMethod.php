<?php
interface PaymentMethod {
    public function processPayment(float $amount): bool;
}