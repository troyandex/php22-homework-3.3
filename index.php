<?php
function myAutoload($className) {   //учитываем пространство имён
        $pathToFile = $_SERVER['DOCUMENT_ROOT'] //ищем файлы начиная от document_root
            . str_replace('\\'
                , DIRECTORY_SEPARATOR, $className
                . '.php'); //добавляем расширение
        if (file_exists($pathToFile)) {
            include "$pathToFile"; // include - так как уже проверили что файл есть и точно загрузит
        }
};
spl_autoload_register('myAutoload');

$car = new \Classes\Products\Car('BMW X5', 2300000);

$duckPekin = new \Classes\Animals\Duck ('Пекинская утка', 'Китай');
$duckPekin->makeSound();

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
<h1>Вывод Корзины</h1>
<p> </p>
<h1>Вывод заказа</h1>
<p> </p>
</body>

</html>
