<?php
namespace Classes;

class Basket
{
    private $order = array(); // нужно продумать многомерный массив
    private $orderSum = 0; // сумма всего заказа

    public function addItem($id, $item) // добавляем товар в корзину
    {
        // if isset($this->order[$id] если товар уже есть
        // $this->order[$id][count] = $this->order[$id][count]++;

        $this->order[$id] = $item; // нужно добавить ID к товарам
    }
    protected function GetOrder() // возвращяет состав корзины
    {
        return $this->order;
    }
    protected function GetOrderSum() // считает сумму заказа с нуля
    {
        $this->orderSum = 0;
        foreach ($this->order as $item) { // для каждого элемента массива заказа
            $this->orderSum = $this->orderSum + $item[price];
        };
        return $this->orderSum;
    }

}