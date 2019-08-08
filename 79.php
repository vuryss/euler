<?php

$codes = explode("\n", trim(file_get_contents('./p079_keylog.txt')));

$before = $available = [];

foreach ($codes as $code) {
    [$a, $b, $c] = str_split($code);
    $before[$b][$a] = true;
    $before[$c][$a] = true;
    $before[$c][$b] = true;

    $available[$a] = true;
    $available[$b] = true;
    $available[$c] = true;
}

$result = '';

while (!empty($available)) {
    foreach ($available as $digit => $dummy) {
        if (empty($before[$digit])) {
            unset($available[$digit]);
            $result .= $digit;

            foreach ($before as $digit2 => $beforeDigits) {
                unset($beforeDigits[$digit]);
                $before[$digit2] = $beforeDigits;
            }

            break;
        }
    }
}

echo 'Answer: ' . $result . PHP_EOL;
