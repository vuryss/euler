<?php

for ($i = 1; $i < 10; $i++) {
    $from = (int) pow(10, $i);
    $to = (int) floor(pow(10, $i + 1) / 6);

    for ($j = $from; $j <= $to; $j++) {
        $a1 = str_split($j); sort($a1); $a = implode('', $a1);
        $a2 = str_split($j * 2); sort($a2); $a = implode('', $a2);
        $a3 = str_split($j * 3); sort($a3); $a = implode('', $a3);
        $a4 = str_split($j * 4); sort($a4); $a = implode('', $a4);
        $a5 = str_split($j * 5); sort($a5); $a = implode('', $a5);
        $a6 = str_split($j * 6); sort($a6); $a = implode('', $a6);

        if ($a1 === $a2
            && $a1 === $a3
            && $a1 === $a4
            && $a1 === $a5
            && $a1 === $a6
        ) {
            echo 'Answer: ' . $j . PHP_EOL;
            break 2;
        }
    }
}
