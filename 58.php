<?php

require_once './helpers.php';

$count = 0;
$total = 1;

for ($i = 2;; $i++) {
    $a = pow(($i * 2) - 1, 2);
    $delta = ($i - 1) * 2;
    $b = $a - $delta;
    $c = $a - 2*$delta;
    $d = $a - 3*$delta;

    if (isPrime($b)) $count++;
    if (isPrime($c)) $count++;
    if (isPrime($d)) $count++;

    $total += 4;

    if ($total / 10 > $count) {
        echo 'Answer: ' . sqrt($a) . PHP_EOL;
        break;
    }
}
