<?php

class BubbleSort
{
    public static function sort(array $array): array {
        return self::bubbleSortHelper($array, function($a, $b) {
            return $a <=> $b;
        });
    }

    public static function sortDates(array $dates): array {
        return self::bubbleSortHelper($dates, function($a, $b) {
            $dateA = new DateTime($a);
            $dateB = new DateTime($b);
            return $dateA <=> $dateB;
        });
    }

    public static function sortMixed(array $array): array {
        return self::bubbleSortHelper($array, function($a, $b) {
            return $a <=> $b;
        });
    }

    private static function bubbleSortHelper(array $array, callable $comparator): array {
        $n = count($array);
        
        for ($i = 0; $i < $n; $i++) {
            $swapped = false;

            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($comparator($array[$j], $array[$j + 1]) > 0) {
                    list($array[$j], $array[$j + 1]) = array($array[$j + 1], $array[$j]);
                    $swapped = true;
                }
            }
            if (!$swapped) break;
        }

        return $array;
    }
}