<?php
namespace classes;

class Order extends Basket
{
    // нужно добавить методы для оформления и печати (вывода на экран) информации о заказе.
    // если правильно понимаю уже знает $order и $orderSum так как protected.

    public function PrintOrder() // вывод заказа
    {
        echo '<strong>Состав заказа:<strong>';
        echo '<pre>';
        print_r(parent::GetOrder());
        echo '<pre>';
        $sum = Basket::GetOrderSum();
        echo "$sum";
    }


}