<?php

$from = gmp_strval(gmp_sqrt('1020304050607080900'));
$to   = gmp_strval(gmp_sqrt('1929394959697989990')) - 3;

echo 'From: ' . $from . ' To: ' . $to . PHP_EOL;

for ($i = $to; $i > $from; $i -= 10) {
    $sq = gmp_strval(gmp_pow($i, 2));

    if ($sq[2] == '2'
        && $sq[4] == '3'
        && $sq[6] == '4'
        && $sq[8] == '5'
        && $sq[10] == '6'
        && $sq[12] == '7'
        && $sq[14] == '8'
        && $sq[16] == '9'
    ) {
        echo 'Answer: ' . $i . PHP_EOL;
        break;
    }
}
