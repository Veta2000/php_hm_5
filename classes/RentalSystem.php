<?php
class RentalSystem {
    private array $vehicles = [];

  
    public function addVehicle(Vehicle $vehicle): void {
        $this->vehicles[] = $vehicle;
    }

    
    public function rentVehicle(int $vehicleIndex, int $duration, PaymentMethod $paymentMethod): void {
        if (!isset($this->vehicles[$vehicleIndex])) {
            echo "Vehicle not found.\n";
            return;
        }

        $vehicle = $this->vehicles[$vehicleIndex];
        $cost = $vehicle->calculateRentalCost($duration);

        if ($paymentMethod->processPayment($cost)) {
            echo "Rental successful for " . $vehicle->getInfo() . ".\n";
        } else {
            echo "Rental failed for " . $vehicle->getInfo() . ".\n";
        }
    }
}
?>
