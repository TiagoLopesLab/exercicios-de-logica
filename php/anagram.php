<?php

function isAnagram(string $w1, string $w2): bool
{
  $arr1 = str_split(str_replace(' ', '', strtolower($w1)));
  $arr2 = str_split(str_replace(' ', '', strtolower($w2)));
  sort($arr1);
  sort($arr2);
  return $arr1 === $arr2;
}

echo (isAnagram("listen", "silent") ? 'true' : 'false') . PHP_EOL;
echo (isAnagram("rail safety", "fairy tales") ? 'true' : 'false') . PHP_EOL;
echo (isAnagram("hello", "world") ? 'true' : 'false') . PHP_EOL;
echo (isAnagram("amor", "roma") ? 'true' : 'false') . PHP_EOL;
echo (isAnagram("carro", "coroa") ? 'true' : 'false') . PHP_EOL;
