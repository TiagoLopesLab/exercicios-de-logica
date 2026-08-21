<?php

function firstUniqueChar(string $text): int
{
  $freq = [];
  $length = strlen($text);

  for ($i = 0; $i < $length; $i++) {
    $char = $text[$i];
    $freq[$char] = ($freq[$char] ?? 0) + 1;
  }

  for ($i = 0; $i < $length; $i++) {
    if ($freq[$text[$i]] === 1) {
      return $i;
    }
  }

  return -1;
}

echo firstUniqueChar('desenvolvedor') . PHP_EOL;
echo firstUniqueChar('javascript') . PHP_EOL;
echo firstUniqueChar('aabbcc') . PHP_EOL;
