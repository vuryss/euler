<?php

require_once './helpers.php';

$i = 1;

foreach (fibonacciGeneratorBig() as $number) {
    if (strlen($number) == 1000) {
        echo 'Answer: ' . $i . PHP_EOL;
        break;
    }

    $i++;
}
