<?php
namespace Classes\Products\Car;

class Car extends Product implements CarInterface
{
    public $power = 150;
    public $type = 'Car';

    public function setCarPower($hp)
{
    $this->power = $hp;
}
}