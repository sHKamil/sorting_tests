<?php

class JitStatus 
{
    public $status;

    public function __construct() {
        if(opcache_get_status()['jit']['enabled'] === true && opcache_get_status()['jit']['on'] === true && opcache_get_status()['jit']['buffer_size'] > 0) {
            $this->status = 'active';
        }else{
            $this->status = 'inactive';
        }
    }
}