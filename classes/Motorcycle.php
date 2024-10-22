<?php
class Motorcycle extends Vehicle {
    private float $hourlyRate;

    public function __construct(string $brand, string $model, int $year, float $hourlyRate) {
        parent::__construct($brand, $model, $year); // Передаем параметры в родительский конструктор
        $this->hourlyRate = $hourlyRate;
    }

    // Реализация абстрактного метода для расчета стоимости аренды мотоцикла
    public function calculateRentalCost(int $hours): float {
        return $this->hourlyRate * $hours;
    }
}