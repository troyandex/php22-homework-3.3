<?php
namespace Classes;

abstract class SuperClass
{
    public function getPrint()
    {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}