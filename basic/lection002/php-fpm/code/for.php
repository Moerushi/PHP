<?php

$students = [
    [
      'name' => 'Иван',
      'score' => 4.5
    ],
    [
      'name' => 'Мария',
      'score' => 5
    ],  
    [
      'name' => 'Петр',
      'score' => 3.7
    ]
  ];
  
$summ = 0;

for ($counter = 0; $counter < count($students); $counter++) {
    $summ += $students[$counter]['score'];
}

echo 'Средний балл: ' . $summ / count($students);

// docker run --rm -v $(pwd)/php-cli/code:/code php:8.2-cli php /code/for.php
