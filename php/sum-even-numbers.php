<?php

/**
 * @param int[] $numbers
 * @return int
 */
function sumEvenNumbers(array $numbers): int
{
  return array_reduce(
    array: $numbers,
    callback: fn(int $acc, int $n) => $n % 2 === 0 ? $n + $acc : $acc,
    initial: 0
  );
}

echo sumEvenNumbers([1, 2, 3, 4, 5]) . PHP_EOL;
echo sumEvenNumbers([10, 15, 20, 25]) . PHP_EOL;
echo sumEvenNumbers([1, 3, 5, 7]) . PHP_EOL;
