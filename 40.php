<?php

$ranges = [0 => ['min' => 0, 'max' => 0]];

for ($i = 1; $i < 7; $i++) {
    $max = (int) str_repeat('9', $i);
    $count = 9 * pow(10, $i - 1);
    $ranges[$i]['min'] = $ranges[$i - 1]['max'] + 1;
    $ranges[$i]['max'] = ($count * $i) + $ranges[$i - 1]['max'];
}

function getDigit($n) {
    global $ranges;

    foreach ($ranges as $rNum => $range) {
        if ($n >= $range['min'] && $n <= $range['max']) {
            break;
        }
    }

    $position = ($n - ($range['min'] - 1));

    $numberPosition = (int) ceil($position / $rNum);

    $number = 1 * pow(10, $rNum - 1) + $numberPosition - 1;

    $digit = (int) substr($number, ($position % $rNum) - 1, 1);

    return $digit;
}

$answer = getDigit(1)
    * getDigit(10)
    * getDigit(100)
    * getDigit(1000)
    * getDigit(10000)
    * getDigit(100000)
    * getDigit(1000000);

echo 'Answer is: ' . $answer . PHP_EOL;
