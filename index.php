<?php
function myAutoload($className) {   //учитываем пространство имён
    $pathToFile = $className . '.php';
    $separator = array('\\', '/');
    $pathToFile = str_replace( $separator , DIRECTORY_SEPARATOR, $pathToFile );
//    var_dump($pathToFile);
//    echo '<br>';
    if (file_exists($pathToFile)) {
        include "$pathToFile"; // include - так как уже проверили что файл есть и точно загрузит
    } else {
        // ошибка загрузки файла
        echo "<br><span style=\"color: red\";>Файл с классом \"$className\" не найден.</span>";
    }
};
spl_autoload_register('myAutoload');

// проверял верно ли проставил пространства имен
// $duckPekin = new \classes\animals\Duck ('Пекинская утка', 'Китай');
// $duckPekin->makeSound();

// Добавляемя товары:
$BMV = new \classes\products\Car('BMW X5', 2300000);
$BMV->setMark();
//$BMV->getPrint();
$Audi = new \classes\products\Car('Audi Q7', 2400000);
$Audi->setMark();
//$Audi->getPrint();
$Lada = new \classes\products\Car('Lada Vesta', 500000);
$Lada->setMark();
//$Lada->getPrint();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>homework-3.3</title>
    <style>
        * {
            font-family: sans-serif;
        }
        span {
            font-weight: bold;
        }
        h1 {
            text-align: center;
        }
        body {
            max-width: 1000px;
            margin: 10px auto;
        }
        li {
            padding: 10px 0;
        }
    </style>
</head>
<body>
<p><span>Пространство имён</span> - абстрактное ограничение, созданное для логической группировки схожих классов.
    Позволяет создовать одинаковые методы и классы в разных пространствах имен, без конфликта между ними.</p>
<p><span>Исключения (Exception)</span> - позволяет прописать проверки на возможные явные ошибки в коде.
    В результате исключений мы можем избежать фатальных или наоборот не видимых ошибок. Залогировать их или вывести предупреждающие сообщение. </p>

<h1>История корзины</h1>
<?php
//добавляем карзину
$Basket = new \classes\Cart();
// Добавляем четыре бмв
$Basket->addProduct($BMV);
$Basket->addProduct($BMV);
$Basket->addProduct($BMV);
$Basket->addProduct($BMV);
echo '<br>';
// Добавляем по одному ауди и ладе
$Basket->addProduct($Audi);
$Basket->addProduct($Lada);
echo '<br>';
// Убираем одно бмв
$Basket->deleteOneProduct($BMV);
?>

<h1>Вывод корзины</h1>
<?php
$Basket->showAllProduct(); // выводит все продукты
?>
<h1>Вывод заказа</h1>
<?php
$Order = new \classes\Order();
$Order->setOrder($Basket); // создание заказа из карзины
$Order->showAllProduct(); // выводит весь заказ
?>
<br>
<button>подтвердить заказ</button>

</body>
</html>
