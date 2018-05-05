<?php
namespace classes;

class Cart extends goods
{
    public $countProduct = [];

    public function addProduct($product){ // добавляем продукт в корзину
        if (!isset($product->numberProduct)) {
            $product->numberProduct = 1;
        }
        if(array_key_exists($product->title, $this->countProduct)){
            $this->countProduct[$product->title]->numberProduct++;
            $count = $this->countProduct[$product->title]->numberProduct;
            echo "Товар $product->title добавлен в корзину (стало $count шт.)<br>";

        }
        else{
            $this->countProduct[$product->title] = $product;
            $count = $this->countProduct[$product->title]->numberProduct;
            echo "Товар $product->title добавлен в корзину (стало $count шт.)<br>";
        }
    }

    public function deleteAllProduct($product){ //убрать все продукты по названию из корщины
        echo $product->title . ' удалён';
        unset($this->countProduct[$product->title]);
    }

    public function deleteOneProduct($product){ //убрать 1 одинаковый продукт
        if(array_key_exists($product->title, $this->countProduct)){
            // echo $this->countProduct[$product->title]->numberProduct . '<br>';
            if($this->countProduct[$product->title]->numberProduct > 0){
                $this->countProduct[$product->title]->numberProduct--;
                $count = $this->countProduct[$product->title]->numberProduct;
                echo "Товар $product->title удалён из корзины (осталось $count шт.)<br>";
            //    echo $this->countProduct[$product->title]->numberProduct . '<br>';
            }
        }
    }

    public function showAllProduct(){ //показать список продуктов и количество
        $resCountProduct = 0;

        foreach($this->countProduct as $key => $value){
            echo 'Товар ' . $key . ', количество: ' . $value->numberProduct . '<br>';

            $resCountProduct = $resCountProduct + $value->numberProduct;
        }
        echo 'Общее количество товаров: ' . $resCountProduct;
        /*
        echo '<pre>';
        var_dump($this->countProduct);
        */
    }

    public function sum(){ //подсчитать общую сумму продукта
        $res = 0;
        //var_dump($this->countProduct);
        foreach($this->countProduct as $key => $value){
            $res = $res + ($value->price * $value->numberProduct);
        }
        return $res;
    }
}