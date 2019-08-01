<?php

$numbers = [];

for ($i = 1; $i < 1000000; $i++) {
    if ((string) $i !== strrev($i)) {
        continue;
    }

    $b = decbin($i);

    if ($b === strrev($b)) {
        $numbers[] = $i;
    }
}

echo 'Answer: ' . array_sum($numbers) . PHP_EOL;
