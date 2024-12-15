<?php

$memory_start = memory_get_usage();


require_once('./vendor/autoload.php');

use Geekbrains\Application1\Application\Application;

try{
    $app = new Application();
    echo $app->run();
}
catch(Exception $e){
    echo $e->getMessage();
}

$memory_end = memory_get_usage();

echo "<h4>Потреблено " . ($memory_end - $memory_start)/1024/1024 . " Мбайт памяти</h4>";