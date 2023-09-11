<?php

class Timer
{
    public $times = [];
    private $precision;

    public function __construct(Int $precision = 5) {
        $this->precision = $precision;
    }

    public function timeMeter(Object $object, Array $array) : Float | False
    {
        if(method_exists($object, 'sort')) {
            $start_time = microtime(true);
            $object->sort($array);
            $end_time = microtime(true);
            return round($end_time - $start_time, $this->precision);
        }else{
            return false;
        }
    }
}