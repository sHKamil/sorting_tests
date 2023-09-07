<?php

require_once 'Functions.php';


class Save
{
    private $destination;

    public function __construct(String $destination, Int $elements) {
        $this->destination = $destination;
        $this->save(Functions::integers($elements), 'integers');
        $this->save(Functions::strings($elements), 'strings');
        $this->save(Functions::mixed($elements), 'mixed');
        $this->save(Functions::dates($elements), 'dates');
        $this->save(Functions::floats($elements), 'floats');
    }

    public function save(Array $array, String $name, Int $max = 5) : void 
    {
        $filename = $this->destination . $name . ".txt";
        for ($i=1; $i <= $max+1; $i++) { 
            if(file_exists($filename))
            {
                $filename = $this->destination . $name . $i . ".txt";
                if($i === $max+1) return;
            } else {
                break;
            }
        }
        file_put_contents($filename, implode("\n", $array));
    }
}
