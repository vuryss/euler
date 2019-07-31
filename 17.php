<?php

$words = [
    1    => 'one',
    2    => 'two',
    3    => 'three',
    4    => 'four',
    5    => 'five',
    6    => 'six',
    7    => 'seven',
    8    => 'eight',
    9    => 'nine',
    10   => 'ten',
    11   => 'eleven',
    12   => 'twelve',
    13   => 'thirteen',
    14   => 'fourteen',
    15   => 'fifteen',
    16   => 'sixteen',
    17   => 'seventeen',
    18   => 'eighteen',
    19   => 'nineteen',
    20   => 'twenty',
    30   => 'thirty',
    40   => 'forty',
    50   => 'fifty',
    60   => 'sixty',
    70   => 'seventy',
    80   => 'eighty',
    90   => 'ninety',
    100  => 'hundred',
    1000 => 'thousand',
];

$string = '';

for ($i = 1; $i <= 1000; $i++) {
    if ($i <= 20) {
        $string .= $words[$i];
        continue;
    }

    if ($i < 100) {
        if ($i % 10 === 0) {
            $string .= $words[$i];
            continue;
        }

        $string .= $words[(int) floor($i / 10) * 10];
        $string .= $words[$i % 10];
        continue;
    }

    if ($i < 1000) {
        $string .= $words[(int) floor($i / 100)];
        $string .= $words[100];

        if ($i % 100 === 0) {
            continue;
        }

        $string .= 'and';

        $j = $i % 100;

        if ($j <= 20) {
            $string .= $words[$j];
            continue;
        }

        if ($j % 10 === 0) {
            $string .= $words[$j];
            continue;
        }

        $string .= $words[(int) floor($j / 10) * 10];
        $string .= $words[$j % 10];
        continue;
    }

    $string .= $words[1] . $words[1000];
}

echo strlen($string) . PHP_EOL;
