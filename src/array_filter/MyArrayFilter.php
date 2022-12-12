<?php

$arr = [-9, -8, -7, -6, -5, -4 -3, -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

function my_array_filter(array $array, ?callable $callback = null, int $mode = 0): array
{
    /**
     * Если callback-функция не передана, все пустые значения массива array будут удалены.
     */
    if (empty($callback)) {
        $result = [];
        foreach ($array as $key => $value) {
            if (!empty($value)) {
                $result[$key] = $value;
            }
        }
        return $result;
    }
    /**
     * Используемая callback-функция
     */
    $result = [];
    foreach ($array as $key => $value) {
        if ($callback($value)) {
            $result[$key] = $value;
        }
    }
    return $result;
}

function even($a)
{
    $state = $a % 2 === 0;
    return (bool)$state;
}

print_r(my_array_filter($arr, 'even'));
