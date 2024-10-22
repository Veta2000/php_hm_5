<?php
require_once 'classes/Vehicle.php';
require_once 'classes/Car.php';
require_once 'classes/Motorcycle.php';
require_once 'classes/PaymentMethod.php';
require_once 'classes/CreditCardPayment.php';
require_once 'classes/RentalSystem.php';


$car1 = new Car("Toyota", "Prado", 2021, 50);
$motorcycle1 = new Motorcycle("Yamaha", "R1", 2020, 10);


$rentalSystem = new RentalSystem();
$rentalSystem->addVehicle($car1);
$rentalSystem->addVehicle($motorcycle1);

$paymentMethod = new CreditCardPayment("1234567812345678", "12/2025");


$rentalSystem->rentVehicle(0, 3, $paymentMethod); 
$rentalSystem->rentVehicle(1, 5, $paymentMethod);
?>