<?php

$input = trim(file_get_contents('p067_triangle.txt'));
$input = explode("\n", $input);

foreach ($input as $line => $values) {
    $input[$line] = explode(' ', $values);
}

for ($i = count($input) - 2; $i >= 0; $i--) {
    for ($j = 0, $nums = count($input[$i]); $j < $nums; $j++) {
        $input[$i][$j] = $input[$i][$j] + max($input[$i + 1][$j], $input[$i + 1][$j + 1]);
    }
}

echo $input[0][0];



