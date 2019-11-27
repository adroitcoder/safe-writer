<?php

declare(strict_types=1);

$data = array_fill(0, random_int(10, 100), $_SERVER);

// sleep for something between 0.5-2s
usleep(random_int(500000, 2000000));

file_put_contents(
    __DIR__ . '/test.php',
    "<?php\nreturn " . var_export($data, true) . ';',
    LOCK_EX
);
