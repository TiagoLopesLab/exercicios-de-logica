<?php

function findLongestWord(string $text)
{
  $words = explode(' ', trim($text));
  $largestWord = '';

  foreach ($words as $word) {
    if (strlen($word) > strlen($largestWord)) {
      $largestWord = $word;
    }
  }
  return $largestWord;
}

echo findLongestWord('O rato roeu a roupa') . PHP_EOL;
echo findLongestWord('Eu amo programar em Javascript e PHP') . PHP_EOL;
echo findLongestWord('Ola mundo') . PHP_EOL;
