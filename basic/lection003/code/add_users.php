<?php

$address = '/code/file.txt';

$name = readline("Введите имя: ");
$date = readline("Введите дату рождения в формате ДД-ММ-ГГГГ: ");

$data = $name . ", " . $date . "\r\n";

$fileHandler = fopen($address, 'a');

if(fwrite($fileHandler, $data)){
    echo "Запись $data добавлена в файл $address";
}
else {
    echo "Произошла ошибка записи. Данные не сохранены";
}

fclose($fileHandler);

// docker container run -it -v $(pwd)/lesson/code:/lesson/code/ php:8.2-cli php /lesson/code/add_users.php
