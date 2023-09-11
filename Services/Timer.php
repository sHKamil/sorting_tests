<?php

class Timer
{
    private $precision;

    public function __construct(Int $precision = 5) {
        $this->precision = $precision;
    }

    public function timeMeter(Object $object, String $method, Array $array) : Float | False
    {
        if(method_exists($object, $method)) {
            $start_time = microtime(true);
            $object->$method($array);
            $end_time = microtime(true);
            return round($end_time - $start_time, $this->precision);
        }else{
            return false;
        }
    }
}