<?php

$array = ['имя', 'почта', 'телефон'];

function my_implode(string $separator, array $array): string
{
  $result = '';
  foreach ($array as $key => $value) {
    $result = "{$result}{$array[$key]}{$separator}";
  }
  return substr($result, 0, -1);
}

print_r(my_implode(',', $array));
