<?php

function C($n , $r)
{
    return gmp_intval(gmp_div(gmp_fact($n), gmp_mul(gmp_fact($r), gmp_fact($n - $r))));
}

$count = 0;

for ($n = 1; $n <= 100; $n++) {
    for ($r = 1; $r <= $n; $r++) {
        if (C($n, $r) > 1000000) {
            $count++;
        }
    }
}

echo 'Answer: ' . $count . PHP_EOL;
