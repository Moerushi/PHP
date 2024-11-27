<?php

$file = fopen('/code/file.txt', 'rb');
$data = fread($file, 400);
fclose($file);
echo $data;