<?php

require_once 'Services/JitStatus.php';
require_once 'Services/Timer.php';
require_once 'Algorithms/QuickSort.php';

function dd($content) {
    return die(var_dump($content));
}

$JitStatus = new JitStatus;
$Timer = new Timer;
echo 'JIT: ' . $JitStatus->status . "<br><br>";

$integers = array_map('intval', file('datasets/integers.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
$strings = file('datasets/strings.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$mixed = file('datasets/mixed.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$dates = file('datasets/dates.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$floats = file('datasets/floats.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo 'Integers: ' . $Timer->timeMeter(new QuickSort, 'sort', $integers) . "<br>";
echo 'Strings: ' . $Timer->timeMeter(new QuickSort, 'sort', $strings) . "<br>";
echo 'Mixed (Int / String): ' . $Timer->timeMeter(new QuickSort, 'sortMixed', $mixed) . "<br>";
echo 'Floats: ' . $Timer->timeMeter(new QuickSort, 'sort', $floats) . "<br>";
echo 'Dates: ' . $Timer->timeMeter(new QuickSort, 'sortDate', $dates) . "<br>";





