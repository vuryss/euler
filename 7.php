<?php

$n = 6;
$i = 13;

while ($n++ < 10001) {
    $i = gmp_strval(gmp_nextprime($i));
}

echo 'Answer: ' . $i . PHP_EOL;
