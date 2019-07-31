<?php

require_once './helpers.php';

$start = microtime(true);

$primes = ESieve(1000);

$map = [];

foreach ($primes as $b) {
    for ($a = -999; $a < 1000; $a += 2) {
        if (-$a > $b) {
            continue;
        }

        for ($n = 1; $n < 80; $n++) {
            $minA = (int) ceil((-$b - pow($n, 2)) / $n);

            if ($a < $minA) {
                continue;
            }

            $check = pow($n, 2) + $a * $n + $b;

            if (!isPrime($check)) {
                break;
            }

            $map[$a . '.' . $b] = isset($map[$a . '.' . $b]) ? $map[$a . '.' . $b] + 1 : 2;
        }
    }
}

arsort($map);
reset($map);

echo 'Answer: ' . array_product(explode('.', key($map))) . PHP_EOL;
echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
