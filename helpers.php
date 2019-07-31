<?php

function ESieve($number)
{
    $primes = array_fill_keys(range(2, $number), true);

    for ($prime = 2; $prime <= $number; $prime++) {
        if (!$primes[$prime]) continue;

        for ($i = $prime * 2; $i <= $number; $i += $prime) {
            $primes[$i] = false;
        }
    }

    return array_keys(array_filter($primes));
}

function isPrime($number): bool
{
    if ($number === 2) {
        return true;
    }

    if ($number % 2 === 0) {
        return false;
    }

    $max = floor(sqrt($number));

    for ($i = 3; $i <= $max; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function primeFactorisation($number): array
{
    $prime = 2;
    $factors = [];

    while ($prime < $number) {
        if ($number % $prime === 0) {
            $factors[] = $prime;
            $number /= $prime;
        } else {
            $prime += $prime >= 3 ? 2 : 1;
        }
    }

    if ($number > 1) {
        $factors[] = $number;
    }

    return $factors;
}

function permutations($array)
{
    $perms = [];

    if (count($array) === 1) {
        return $array;
    }

    foreach ($array as $index => $key) {
        $copy = $array;
        unset($copy[$index]);

        $subPermutations = permutations($copy);

        foreach ($subPermutations as $permutation) {
            $perms[] = $key . $permutation;
        }
    }

    return $perms;
}

function permutationsGenerator($array)
{
    if (count($array) === 1) {
        return $array;
    }

    foreach ($array as $index => $key) {
        $copy = $array;
        unset($copy[$index]);

        $subPermutations = permutations($copy);

        foreach ($subPermutations as $permutation) {
            yield $key . $permutation;
        }
    }
}

function allCombinations($array)
{
    $combinations = [[array_pop($array)]];

    if (empty($array)) {
        return $combinations;
    }

    foreach (allCombinations($array) as $combination) {
        $combinations[] = $combination;
        $combinations[] = array_merge($combinations[0], $combination);
    }

    return $combinations;
}

function fibonacciGenerator()
{
    $f = 1;
    yield $f;
    $s = 1;
    yield $s;

    while (true) {
        $t = $f + $s;
        $f = $s;
        $s = $t;
        yield $s;
    }
}

function fibonacciGeneratorBig()
{
    $f = '1';
    yield $f;
    $s = '1';
    yield $s;

    while (true) {
        $t = bcadd($f, $s);
        $f = $s;
        $s = $t;
        yield $s;
    }
}
