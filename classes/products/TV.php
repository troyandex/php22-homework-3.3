<?php
namespace Classes\Products\TV;

class TV extends Product
{
    public $resolution = '10*10';
    public $color = 'black';

    public function setTVResolution($resolution)
    {
        $this->resolution = $resolution;
    }
}