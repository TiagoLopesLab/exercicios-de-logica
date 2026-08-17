<?php

function palindromeChecker(string $text)
{
  $cleanText = str_replace(' ', '', strtolower($text));
  $reversedText = strrev($cleanText);

  return $cleanText === $reversedText;
}

var_dump(palindromeChecker('arara'));
var_dump(palindromeChecker('A base do teto desaba'));
var_dump(palindromeChecker('javascript'));
