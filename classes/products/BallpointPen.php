<?php
namespace Classes\Products;

class BallpointPen extends Product
{
    public $color;

    public function setPenColor($color)
    {
        $this->color = $color;
    }
}