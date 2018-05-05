<?php
namespace classes\Products;

abstract class Product extends \Classes\Goods implements \Interfaces\ProductInterface
{
    public $mark;
    public $title;
    public $price;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }
    public function setMark() // выделяет марку из названия (первое слово)
    {
        $mark = explode(" ", $this->title);
        $this->mark = $mark[0];
        return $this->mark;
    }
    public function getPrint()
    {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}