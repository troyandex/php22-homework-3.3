<?php
namespace Classes;

class Order extends Basket
{
    // нужно добавить методы для оформления и печати (вывода на экран) информации о заказе.
    // если правильно понимаю уже знает $order и $orderSum так как protected.

    public function PrintOrder() // вывод заказа
    {
        echo '<strong>Состав заказа:<strong>';
        echo '<pre>';
        print_r(parent::order);
        echo '<pre>';
        return Basket::orderSum;
    }
    public function PrintSum() // вывод суммы
    {
        echo '<strong>Состав заказа:<strong>';
        echo '<pre>';
        print_r(parent::orderSum);
        echo '<pre>';
        return Basket::$orderSum;
    }

}