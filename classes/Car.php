<?php
class Car extends Vehicle {
    private float $dailyRate;

    public function __construct(string $brand, string $model, int $year, float $dailyRate) {
        parent::__construct($brand, $model, $year); // Передаем параметры в родительский конструктор
        $this->dailyRate = $dailyRate;
    }

    // Реализация абстрактного метода для расчета стоимости аренды автомобиля
    public function calculateRentalCost(int $days): float {
        return $this->dailyRate * $days;
    }
}