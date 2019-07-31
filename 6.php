<?php

$sum1 = $sum2 = 0;


for ($i = 1; $i <= 100; $i++) {
    $sum1 += $i*$i;
    $sum2 += $i;
}

$sum2 *= $sum2;

echo 'Answer: ' . ($sum2 - $sum1) . PHP_EOL;
