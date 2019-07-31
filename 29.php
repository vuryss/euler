<?php

$numbers = [];

for ($i = 2; $i <= 100; $i++) {
    for ($j = 2; $j <= 100; $j++) {
        $numbers[] = pow($i, $j);
    }
}

echo 'Answer: ' . count(array_unique($numbers)) . PHP_EOL;
