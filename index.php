<?php

$input = [6, 1, 6, 2, 4];
$result = calc($input);
print_r($result);


function calc($input): int
{
    $resultLine = 0;
    $maxWeight = PHP_INT_MAX;

    for($i = 1; $i <= max($input); $i++) {
        $stepWeight = 0;
        for($j = 0; $j < count($input); $j++) {
            $currentWeight = abs($input[$j] - $i);
            $stepWeight = $stepWeight + $currentWeight;
        }

        if ($stepWeight < $maxWeight) {
            $maxWeight = $stepWeight;
            $resultLine = $i;
        }
    }

    return $resultLine;
}
