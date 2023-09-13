<?php

class MergeSort 
{

    public static function sort(array $array): array {
        return self::mergeSortHelper($array, function($a, $b) {
            return $a <=> $b;
        });
    }
    
    public static function sortMixed(array $array): array {
        return self::mergeSortHelper($array, function($a, $b) {
            return $a <=> $b;
        });
    }

    private static function mergeSortHelper(array $array, callable $comparator): array {
        $length = count($array);

        if ($length <= 1) {
            return $array;
        }

        $mid = floor($length / 2);
        $left = array_slice($array, 0, $mid);
        $right = array_slice($array, $mid);
        $left = self::mergeSortHelper($left, $comparator);
        $right = self::mergeSortHelper($right, $comparator);

        return self::merge($left, $right, $comparator);
    }

    private static function merge(array $left, array $right, callable $comparator): array {
        $result = [];
        while (count($left) > 0 && count($right) > 0) {
            if ($comparator($left[0], $right[0]) <= 0) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        }
        while (count($left) > 0) {
            $result[] = array_shift($left);
        }
        while (count($right) > 0) {
            $result[] = array_shift($right);
        }
        return $result;
    }
}
