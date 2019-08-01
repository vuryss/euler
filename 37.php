<?php

require_once './helpers.php';

$prime   = '17';
$count   = 0;
$numbers = [];

while (true) {
    $prime = gmp_strval(gmp_nextprime($prime));

    if (strpos($prime, '4') !== false
        || strpos($prime, '6') !== false
        || strpos($prime, '8') !== false
        || strpos($prime, '0') !== false
        || strpos($prime, '2')
        || strpos($prime, '5')
    ) {
        continue;
    }

    $last = strlen($prime) - 1;

    if ($prime[0] === '1' || $prime[$last] === '1') {
        continue;
    }

    for ($i = 0; $i < $last; $i++) {
        if (!isPrime(substr($prime, $i + 1)) || !isPrime(substr($prime, 0, $last - $i))) {
            continue 2;
        }
    }

    $numbers[] = $prime;

    if (++$count == 11) {
        break;
    }
}

echo 'Answer: ' . array_sum($numbers) . PHP_EOL;
