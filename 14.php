<?php

$i = 0;
$max = 1;
$number = 1;

while (++$i < 1000000) {
    $num = $i;
    $chain = 1;

    while ($num != 1) {
        $chain++;

        if ($num % 2 === 0) {
            $num = $num / 2;
        } else {
            $num = 3 * $num + 1;
        }
    }

    if ($chain > $max) {
        $max = $chain;
        $number = $i;
    }
}

echo $max . PHP_EOL;
echo $number . PHP_EOL;
