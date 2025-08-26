<?php

declare(strict_types=1);

//namespace transport\Auto;

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
        $this->mileage = null;
        $this->price = $price;        
    }

    static $MILEAGE = 0.5;

    public function setMileage(int $mileage): void {
        $this->mileage = $mileage;
    }    

    private function setStatus() {
        if($this->mileage <= $MILEAGE) {
            $this->is_new = true;
        } else {
            $this->is_new = false;
        }
    }

    public function getStatus() {
        return $is_new;
    }
}
