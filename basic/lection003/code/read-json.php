<?php

$path = '/code/birthday.json';

$fileHandle = fopen($path, 'r');
$data = json_decode(file_get_contents($path), true);
print_r($data[0]['name'] . " was born on " . $data[0]['birthday'] . "\r\n");

fclose($fileHandle);

// $data = array('name' => 'Петр Петров', 'birthday' => '06-11-1998');
// $json = json_encode($data);
// $decodedData = json_decode($json);
// print_r($decodedData);