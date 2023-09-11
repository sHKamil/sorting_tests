<?php

class InsertionSort {

    public static function sort(array $array): array {
        // Standard InsertionSort for int, string, and float
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
                // Handle the exception, perhaps log the error or throw an error
                // For this example, we'll just return 0 for no difference.
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

            // Move elements that are greater than the key to one position
            // ahead of their current position
            while ($j >= 0 && $comparator($array[$j], $key) > 0) {
                $array[$j + 1] = $array[$j];
                $j = $j - 1;
            }

            $array[$j + 1] = $key;
        }

        return $array;
    }
}
