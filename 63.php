<?php

$count = 0;

for ($i = 1; $i <= 9; $i++) {
    $n = 1;

    do {
        $res = bcpow($i, $n);
        $len = mb_strlen($res);

        if ($len === $n) {
            $count++;
        }

        if ($n > 100) break;
    } while ($len <= $n++);
}

echo 'Answer: ' . $count . PHP_EOL;
