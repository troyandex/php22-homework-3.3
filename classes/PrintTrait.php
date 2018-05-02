<?php
namespace Classes;

trait PrintTrait
{
    public function getPrint()
    {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}