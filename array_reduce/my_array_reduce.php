<?php

$arr = [5, 7, 9, 0, 11, 56, 8];

function my_array_reduce(array $array, callable $callback, mixed $initial = null): mixed
{
  $acc = $initial;
    foreach($array as $item)
        $acc = $callback($acc, $item);
    return $acc;
}

function sum($a, $b)
{
  $a += $b;
    return $a;
}

function multiply($n, $m)
{
  $n *= $m;
    return $n;
}

print_r(my_array_reduce($arr, 'sum'));
print_r("\n");
