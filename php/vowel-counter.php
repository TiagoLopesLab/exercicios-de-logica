<?php

function vowelCounter(string $content): int
{
  return preg_match_all(
    pattern: "/[aeiou]/i",
    subject: $content
  ) ?: 0;
}

echo vowelCounter('javascript') . PHP_EOL;
echo vowelCounter('PHP e incrivel') . PHP_EOL;
echo vowelCounter('HLL WRLD') . PHP_EOL;
