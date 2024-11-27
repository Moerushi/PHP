<?php

// подключение файлов логики
// require_once('src/main.function.php');
// require_once('src/template.function.php');
// require_once('src/file.function.php');

require_once __DIR__ . '/vendor/autoload.php'; // абсолютный путь

// вызов корневой функции
$result = main("/code/config.ini"); // относительный путь
// вывод результата
echo $result;
