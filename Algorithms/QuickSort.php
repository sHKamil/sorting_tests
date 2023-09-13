<?php

class QuickSort
{
    public static function sort(Array $array) : Array
    {
        if (count($array) < 2) {
            return $array;
        }
        $left = $right = array();
        reset($array);
        $pivot_key = key($array);
        $pivot = array_shift($array);
        foreach ($array as $k => $v) {
            if ($v < $pivot)
                $left[$k] = $v;
            else
                $right[$k] = $v;
        }
        return array_merge(self::sort($left), array($pivot_key => $pivot), self::sort($right));
    }

    public static function sortMixed(array $array) : array {
        $length = count($array);

        if ($length <= 1) {
            return $array;
        }

        $pivot = $array[0];
        $left = $right = [];

        for ($i = 1; $i < $length; $i++) {
            if ((is_numeric($pivot) && is_numeric($array[$i])) || 
                (is_string($pivot) && is_string($array[$i]))) {
                if ($array[$i] <= $pivot) {
                    $left[] = $array[$i];
                } else {
                    $right[] = $array[$i];
                }
            } else {
                if (is_numeric($pivot)) {
                    $right[] = $array[$i];
                } else {
                    $left[] = $array[$i];
                }
            }
        }

        return array_merge(self::sort($left), [$pivot], self::sort($right));
    }
}
