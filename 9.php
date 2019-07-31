<?php

for ($a = 1; $a < 333; $a++) {
    for ($b = $a + 1; $b < 1000 - $a; $b++) {
        for ($c = $b + 1; $c < 996; $c++) {
            if (($a*$a + $b*$b === $c * $c) && ($a + $b + $c === 1000)) {
                echo 'Answer: ' . ($a * $b * $c) . PHP_EOL;
                break 3;
            }
        }
    }
}
