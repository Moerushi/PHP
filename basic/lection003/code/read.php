<?php

$fileContents = file_get_contents('/lesson/code/file.txt');
echo $fileContents;

// docker run --rm -v $(pwd)/lesson/code:/lesson/code/ php:8.2-cli php /lesson/code/read.php

// docker container run -it -v $(pwd)/lesson/code:/lesson/code/ php:8.2-cli php /lesson/code/read.php