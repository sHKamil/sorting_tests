<?php

require_once 'Services/JitStatus.php';
require_once 'Services/Timer.php';
require_once 'Algorithms/QuickSort.php';

function dd($content) {
    return die(var_dump($content));
}

$JitStatus = new JitStatus;
$Timer = new Timer;
echo $JitStatus->status;
$file = file('datasets/integers.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$array = array_map('intval', $file);

echo $Timer->timeMeter(new QuickSort, $array);
