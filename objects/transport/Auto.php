<?php

declare(strict_types=1);

namespace Transport;

class Auto 
{
    public $brand, $model, $fuel, $engine_capacity, $fuel_tank, $year_issue, $mileage, $price;

    private bool $is_new;

    public function __construct(string $brand, string $model, string $fuel, int $engine_capacity, int $fuel_tank, int $year_issue, int $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->fuel = $fuel;
        $this->engine_capacity = $engine_capacity;
        $this->fuel_tank = $fuel_tank;
        $this->year_issue = $year_issue;
        $this->mileage = 0;
        $this->price = $price;        
    }

    private static int $MILEAGE = 5;

    public function setMileage(int $new_mileage): void {
        $this->mileage = $new_mileage;
        $this->setStatus();
    }    

    private function setStatus(): void {
        if($this->mileage <= Auto::$MILEAGE) {
            $this->is_new = true;
        } else {
            $this->is_new = false;
        }
    }

    public function getStatus(): string {
        if($this->is_new) {
            return 'Новая';
        } else {
            return 'С пробегом';
        }
    }
}
