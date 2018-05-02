<?php
namespace Classes\Products;

abstract class Product extends \Classes\Goods implements \Interfaces\ProductInterface
{
    private $id;
    private $title;
    private $price;
    private $mark;

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
}