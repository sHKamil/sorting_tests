<?php

class InsertionSort {

    public static function sort(array $array): array {
        return self::insertionSortHelper($array, function($a, $b) {
            return $a <=> $b;
        });
    }

    private static function insertionSortHelper(array $array, callable $comparator): array {
        $length = count($array);

        for ($i = 1; $i < $length; $i++) {
            $key = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $comparator($array[$j], $key) > 0) {
                $array[$j + 1] = $array[$j];
                $j = $j - 1;
            }

            $array[$j + 1] = $key;
        }

        return $array;
    }
}
