<?php

$arr = [1, 2, 3, 4, 5];

function my_array_map(?callable $callback, array $array, array ...$arrays): array
{
  if (!is_callable($callback)) {
    throw new Exception('Argument is not callable');
  }
  $result = [];
    foreach ($array as $item) {
        $result[] = $callback($item);
    }
    return $result;
}

function cube($n)
{
    return ($n * $n * $n);
}

print_r(my_array_map('cube', $arr));
