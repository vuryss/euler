<?php

$num = 1;
$i = 1;
$start = microtime(true);

do {
    $num += ++$i;
    $f = numFactors($num);
} while ($f < 500);

echo 'Number: ' . $num . ' factors: ' . numFactors($num) . PHP_EOL;
echo 'Time: ' . (microtime(true) - $start) . PHP_EOL;

function numFactors(int $number)
{
    $f = 2;
    $lim = (int) floor(sqrt($number));

    for ($i = 2; $i <= $lim; $i++) {
        if ($number % $i === 0) {
            $f += 2;
            continue;
        }
    }

    return $f;
}
