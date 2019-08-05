<?php

require_once './helpers.php';

$primes = ESieve(9999);

foreach ($primes as $key => $prime) {
    if ($prime < 1000) {
        unset($primes[$key]);
    }
}

$primes = array_flip($primes);

foreach ($primes as $prime => $dummy) {
    $perms = permutations(str_split($prime));
    $matches = [];

    foreach ($perms as $perm) {
        if (isset($primes[$perm])) {
            $matches[] = $perm;
        }
    }

    $matches = array_unique($matches);
    sort($matches);
    $count = count($matches);

    if ($count > 2) {
        $diffs = [];

        for ($i = 0; $i < $count - 1; $i++) {
            if ($matches[$i] <= $prime) continue;

            $diff = $matches[$i] - $prime;

            if (in_array($matches[$i] + $diff, $matches)) {
                echo 'Answer: ' . ($prime . ($prime + $diff) . ($prime + 2*$diff)) . PHP_EOL;
            }
        }
    }
}
