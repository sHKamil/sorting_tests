<?php

class HeapSort
{

    public static function sort(array $array): array {
        return self::heapSortHelper($array, function($a, $b) {
            return $a <=> $b;
        });
    }

    public static function sortDate(array $dates): array {
        return self::heapSortHelper($dates, function($a, $b) {
            $dateA = new DateTime($a);
            $dateB = new DateTime($b);
            return $dateA <=> $dateB;
        });
    }

    public static function sortMixed(array $array): array {
        return self::heapSortHelper($array, function($a, $b) {
            return $a <=> $b;
        });
    }

    private static function heapSortHelper(array $array, callable $comparator): array {
        $length = count($array);
        for ($i = floor($length / 2) - 1; $i >= 0; $i--) {
            self::heapify($array, $length, $i, $comparator);
        }
        for ($i = $length - 1; $i >= 0; $i--) {
            list($array[0], $array[$i]) = array($array[$i], $array[0]);
            self::heapify($array, $i, 0, $comparator);
        }
        return $array;
    }

    private static function heapify(&$array, $length, $root, callable $comparator): void {
        $largest = $root;
        $leftChild = 2 * $root + 1;
        $rightChild = 2 * $root + 2;

        if ($leftChild < $length && $comparator($array[$leftChild], $array[$largest]) > 0) {
            $largest = $leftChild;
        }

        if ($rightChild < $length && $comparator($array[$rightChild], $array[$largest]) > 0) {
            $largest = $rightChild;
        }

        if ($largest !== $root) {
            list($array[$root], $array[$largest]) = array($array[$largest], $array[$root]);
            self::heapify($array, $length, $largest, $comparator);
        }
    }
}
