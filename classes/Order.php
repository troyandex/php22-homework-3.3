<?php
namespace classes;

class Order extends Cart
{
    // нужно добавить методы для оформления и печати (вывода на экран) информации о заказе.
    // если правильно понимаю уже знает $order и $orderSum так как protected.
    public function setOrder($cart)
    {
        if (isset($cart)) {
            $this->countProduct = $cart->countProduct;
            echo 'Создан заказ:<br>';
        } else {
            echo 'Ошибка при создании заказа';
        }
    }

    public function showAllProduct(){ //переопределяем метод вывода всего заказа с суммой к оплате
        $resCountProduct = 0;
        foreach($this->countProduct as $key => $value){
            echo '<li>'  . $key . ' - ' . $value->numberProduct . ' шт., по ' . $value->price . ' руб.</li>';
            $resCountProduct = $resCountProduct + $value->numberProduct;
        }
        $sum = parent::sum();
        echo 'Итого к оплате: ' . $sum . 'рублей.';
    }

}