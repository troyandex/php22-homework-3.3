<?php
namespace Classes\Products;

abstract class Product extends SuperClass implements ProductInterface
{
    protected $title;
    protected $price;
    protected $mark;

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