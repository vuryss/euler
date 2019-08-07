<?php

$count = 0;

for ($i = 2; $i <= 1000; $i++) {
    $u1 = 5;
    $d1 = 2;

    for ($j = 0; $j < $i - 2; $j++) {
        $t = $u1;
        $u1 = bcadd(bcmul($u1, 2), $d1);
        $d1 = $t;
    }

    $d = $u1;
    $u = bcadd($u1, $d1);

    if (strlen($u) > strlen($d)) {
        $count++;
    }
}

echo 'Answer: ' . $count . PHP_EOL;
