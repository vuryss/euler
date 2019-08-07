<?php

$encrypted = explode(',', file_get_contents('./p059_cipher.txt'));

$from = ord('a');
$to = ord('z');

$from2 = ord('A');
$to2 = ord('Z');

$map = [];
$index = 0;

for ($c0 = $from; $c0 <= $to; $c0++) {
    for ($c1 = $from; $c1 <= $to; $c1++) {
        for ($c2 = $from; $c2 <= $to; $c2++) {
            $pass = chr($c0) . chr($c1) . chr($c2);

            foreach ($encrypted as $index => $value) {
                $c = $index % 3;
                $d = (int) $value ^ ${'c' . $c};

                if ($d >= $from && $d <= $to || $d >= $from2 && $d <= $to2) {
                    $map[$pass] = isset($map[$pass]) ? $map[$pass] + 1 : 1;
                }
            }
        }
    }
}

$pass = array_search(max($map), $map);
$c0 = ord($pass[0]);
$c1 = ord($pass[1]);
$c2 = ord($pass[2]);

echo 'Password: ' . $pass . PHP_EOL;

$sum = 0;

foreach ($encrypted as $index => $value) {
    $c = $index % 3;
    $d = (int) $value ^ ${'c' . $c};

    $sum += $d;
}

echo 'Answer: ' . $sum . PHP_EOL;
