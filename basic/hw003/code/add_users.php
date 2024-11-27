<?php

$address = 'file.txt';
$name = readline("Введите имя: ");
$data = readline("Введите дату рождения в формате ДД-ММ-ГГГГ: ");
$data = $name . ", " . $data . "\r\n";
$fileHandler = fopen($address, 'a');
if(fwrite($fileHandler, $data)){
		echo "Запись $data добавлена в файл $address";
} else {
		echo "Произошла ошибка записи. Данные не сохранены";
}
fclose($fileHandler);