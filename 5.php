<?php

$i = 1000;

while (true) {
    $i++;

    for ($j = 2; $j <= 20; $j++) {
        if ($i % $j !== 0) {
            continue 2;
        }
    }

    echo 'Answer: ' . $i . PHP_EOL;
    break;
}
