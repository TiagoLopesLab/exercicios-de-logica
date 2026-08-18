<?php

function capitalize(string $text): string
{
  return ucwords(strtolower(trim($text)));
}

echo capitalize('ola mundo') . PHP_EOL;
echo capitalize('jAVAsCrIpT e leGal') . PHP_EOL;
echo capitalize('PHP') . PHP_EOL;
