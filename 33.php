<?php

require_once './helpers.php';

$numerators = [];
$denominators = [];

for ($i = 10; $i < 99; $i++) {
    for ($j = $i + 1; $j < 100; $j++) {
        if ($i % 10 === 0 || $j % 10 === 0) {
            continue;
        }

        $n = (string) $i;
        $d = (string) $j;

        if ($n[1] === $d[0] && $n / $d == $n[0] / $d[1]) {
            $numerators[] = $i;
            $denominators[] = $j;
        }

        if ($n[0] === $d[1] && $n / $d == $n[1] / $d[0]) {
            $numerators[] = $i;
            $denominators[] = $j;
        }
    }
}

$denominator = array_product($denominators);
$factorsN = primeFactorisation(array_product($numerators));
$factorsD = primeFactorisation($denominator);
$factors = [];

foreach ($factorsN as $factor) {
    $i = array_search($factor, $factorsD);

    if ($i !== false) {
        $factors[] = $factor;
        unset($factorsD[$i]);
    }
}

echo 'Answer: ' . ($denominator / array_product($factors)) . PHP_EOL;
