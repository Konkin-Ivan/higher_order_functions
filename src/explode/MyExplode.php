<?php

$pizza  = "кусок1  кусок2  кусок3  кусок4  кусок5  кусок6";

function my_explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
{
  $current = [];
  $bufer = null;
  $length = mb_strlen($string);
  for ($i = 0; $i <= $length; $i++) {
    $letter = mb_substr($string, $i, 1);
    if ($letter === $separator[0]) {
      $current[] = $bufer;
      $bufer = null;
    } else {
      $bufer = $bufer === null ? $letter : "{$bufer}{$letter}";
    }
  }
  $result = [];
  foreach ($current as $key) {
    if (is_null($key) === false) {
      $result[] = $key;
    }
  }
  return $result;
}

$pieces = my_explode("  ", $pizza);
echo $pieces[0]; // кусок1
echo $pieces[1]; // кусок2
//var_dump($pieces);