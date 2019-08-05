<?php

$num = '0';

for ($i = 1; $i <= 1000; $i++) {
    $num = bcadd($num, bcpow($i, $i));
}

echo 'Answer: ' . substr($num, -10) . PHP_EOL;
