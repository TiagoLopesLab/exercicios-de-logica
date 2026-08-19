<?php

/**
 * @param int[] $numbers
 * @param int $target
 * @return int[]
 */
function twoSum(array $numbers, int $target): array
{
  $map = [];
  foreach ($numbers as $pos => $number) {
    $complement = $target - $number;

    if (isset($map[$complement])) {
      return [$complement, $number];
    }

    $map[$number] = $pos;
  }
  return [];
}

var_dump(twoSum([2, 7, 11, 15], 9));
var_dump(twoSum([3, 2, 4], 6));
var_dump(twoSum([3, 3], 6));
