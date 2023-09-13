<?php

class InsertionSort {

    public static function sort(array $array): array {
        return self::insertionSortHelper($array, function($a, $b) {
            return $a <=> $b;
        });
    }

    public static function sortDate(array $dates): array {
        return self::insertionSortHelper($dates, function($a, $b) {
            try {
                $dateA = new DateTime($a);
                $dateB = new DateTime($b);
            } catch (Exception $e) {
                return '0';
            }
            return $dateA <=> $dateB;
        });
    }

    public static function sortMixed(array $array): array {
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
