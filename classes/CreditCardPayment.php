<?php
class CreditCardPayment implements PaymentMethod {
    private string $cardNumber;
    private string $expirationDate;

    public function __construct(string $cardNumber, string $expirationDate) {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }


    public function processPayment(float $amount): bool {
        if ($this->validateCard()) {
            echo "Payment of $amount processed successfully.\n";
            return true;
        }
        echo "Payment failed.\n";
        return false;
    }

    private function validateCard(): bool {
        $currentYear = date('Y');
        $expiryYear = substr($this->expirationDate, -4);
        return $expiryYear >= $currentYear;
    }
}