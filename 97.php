<?php

$start = microtime(true);

$n = gmp_add(gmp_mul('28433', gmp_pow('2', '7830457')), '1');

echo 'Answer: ' . substr($n, -10) . PHP_EOL;
echo 'Execution time: ' . (microtime(true) - $start) . PHP_EOL;
