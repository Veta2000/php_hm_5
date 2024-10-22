<?php
abstract class Vehicle {
    protected string $brand;
    protected string $model; // Убрали static
    protected int $year;

    public function __construct(string $brand, string $model, int $year){
        $this->brand = $brand;
        $this->model = $model; // Теперь это обычное свойство
        $this->year = $year;
    }

    // Абстрактный метод расчета стоимости аренды
    abstract public function calculateRentalCost(int $days): float;

    // Метод, возвращающий информацию о транспортном средстве
    public function getInfo(): string {
        return "{$this->brand} {$this->model} ({$this->year})"; // Теперь работает корректно
    }
}