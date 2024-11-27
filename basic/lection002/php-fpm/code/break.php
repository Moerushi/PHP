<?php

for ($i = 1; $i <= 10; $i++) {
  if ($i % 2 == 0) {
    continue;
  }

   echo $i;
}

// docker run --rm -v $(pwd)/php-cli/code:/code php:8.2-cli php /code/break.php