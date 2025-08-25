<?php

declare(strict_types=1);

namespace household_appliances\Tv;

class Tv 
{

    public $brand, $model, $screen_diagonal, $screen_resolution, $backlight_type, $garanty, $frame_rate, $width, $height, $price;

    public function __construct(string $brand, string $model, int $screen_diagonal, string $screen_resolution, string $backlight_type, bool $garanty, int $frame_rate, int $width, int $height, int $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->screen_diagonal = $screen_diagonal;
        $this->screen_resolution = $screen_resolution;
        $this->backlight_type = $backlight_type;
        $this->garanty = $garanty;
        $this->frame_rate = $frame_rate;
        $this->width = $width;
        $this->height = $height;
        $this->price = $price;
        $this->is_qhd = null;
    }

    static $SCREEN_RESOLUTION = '2560x1440';

    private function setQhd(): void {
        if($this->screen_resolution > $SCREEN_RESOLUTION) {
            $this->is_qhd = true;
        } else {
            $this->is_qhd = false;
        }
    }
}

?>