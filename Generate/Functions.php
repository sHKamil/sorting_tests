<?php

class Functions
{
    public static function integers($elements) : array {
        $integers = [];
        for ($i = 0; $i < $elements; $i++) {
            $integers[] = rand(1, 10000);
        }
        return $integers;
    }
    
    public static function strings($elements) : array {
        $strings = [];
        for ($i = 0; $i < $elements; $i++) {
            $length = rand(5, 20);
            $str = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
            $strings[] = $str;
        }
        return $strings;
    }
    
    public static function mixed($elements) : array {
        $mixed = [];
        for ($i = 0; $i < $elements; $i++) {
            if (rand(0, 1) == 0) {
                $mixed[] = rand(1, 10000);
            } else {
                $length = rand(5, 20);
                $str = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
                $mixed[] = $str;
            }
        }
        return $mixed;
    }
    
    public static function dates($elements) : array {
        $dates = [];
        for ($i = 0; $i < $elements; $i++) {
            $timestamp = rand(strtotime("2000-01-01"), strtotime("2022-01-01"));
            $dates[] = date("Y-m-d", $timestamp);
        }
        return $dates;
    }
    
    public static function floats($elements) : array {
        $floats = [];
        for ($i = 0; $i < $elements; $i++) {
            $floats[] = lcg_value() * 10000;
        }
        return $floats;
    }
}