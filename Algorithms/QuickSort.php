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
}
