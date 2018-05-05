<?php
namespace Classes\products;

class Car extends Product implements \interfaces\CarInterface
{
    public $power = 150;
    public $type = 'Car';

    public function setCarPower($hp)
    {
        $this->power = $hp;
    }
}