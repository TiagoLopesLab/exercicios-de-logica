<?php

/**
 * @param int[] $numbers
 * @return int[]
 */
function moveZeros(array $numbers): array
{
  $nonZeroArray = [];
  $zeroArray = [];

  foreach ($numbers as $number) {
    if (!is_numeric($number)) {
      throw new Error('All the items must be of type number');
    }

    if ($number == 0) {
      $zeroArray[] = 0;
    } else {
      $nonZeroArray[] = (int) $number;
    }
  }

  return [...$nonZeroArray, ...$zeroArray];
}

var_dump(moveZeros([0, 1, 0, 3, 12]));
var_dump(moveZeros([0, 0, 5, 0, 9, 8]));
var_dump(moveZeros([2, 4, 6]));
