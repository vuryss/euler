<?php

$count = 0;

for ($i = 1; $i <= 10000; $i++) {
    $result = $i;
    $found = false;

    for ($n = 0; $n < 50; $n++) {
        $result = $result + (int) strrev($result);

        if ((string) $result === strrev($result)) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        $count++;
    }
}

echo 'Answer: ' . $count . PHP_EOL;
