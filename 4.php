<?php

$largest = 0;

for ($i = 100; $i <= 999; $i++) {
    for ($j = 100; $j <= 999; $j++) {
        $num = (string) ($i * $j);
        if ($num === strrev($num) && (int) $num > $largest) {
            $largest = (int) $num;
        }
    }
}

echo 'Answer: ' . $largest . PHP_EOL;
