<?php

$date = new DateTime('1901-01-01');
$end = strtotime('2001-01-01');
$count = 0;

while(true) {
    if ($date->format('N') == '7') {
        $count++;
    };

    $date->add(new DateInterval('P1M'));

    if ($date->getTimestamp() >= $end) {
        break;
    }
}

echo 'Answer: ' . $count . PHP_EOL;
