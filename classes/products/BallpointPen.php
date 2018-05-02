<?php
namespace Classes\Products\BallpointPen;

class BallpointPen extends Product
{
    public $color;

    public function setPenColor($color)
    {
        $this->color = $color;
    }
}