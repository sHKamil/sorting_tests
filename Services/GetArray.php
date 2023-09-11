<?php

class GetArray {
    public static function get(String $file, String $path = 'datasets/') {
        return file($path . $file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
}