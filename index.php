<?php

require_once 'Services/JitStatus.php';
require_once 'Services/GetArray.php';
require_once 'Services/Timer.php';
require_once 'Algorithms/QuickSort.php';
require_once 'Algorithms/MergeSort.php';
require_once 'Algorithms/HeapSort.php';
require_once 'Algorithms/InsertionSort.php';

function dd($content) {
    return die(var_dump($content));
}

$JitStatus = new JitStatus;
$Timer = new Timer;
echo 'JIT: ' . $JitStatus->status . "<br><br>";

$integers = array_map('intval', GetArray::get('integers.txt'));
$strings = GetArray::get('strings.txt');
$mixed = GetArray::get('mixed.txt');
$dates = GetArray::get('dates.txt');
$floats = GetArray::get('floats.txt');

// echo 'Integers: ' . $Timer->timeMeter(new QuickSort, 'sort', $integers) . "<br>";
// echo 'Strings: ' . $Timer->timeMeter(new QuickSort, 'sort', $strings) . "<br>";
// echo 'Mixed (Int / String): ' . $Timer->timeMeter(new QuickSort, 'sortMixed', $mixed) . "<br>";
// echo 'Floats: ' . $Timer->timeMeter(new QuickSort, 'sort', $floats) . "<br>";
// echo 'Dates: ' . $Timer->timeMeter(new QuickSort, 'sortDate', $dates) . "<br><br>";

// echo 'Integers: ' . $Timer->timeMeter(new MergeSort, 'sort', $integers) . "<br>";
// echo 'Strings: ' . $Timer->timeMeter(new MergeSort, 'sort', $strings) . "<br>";
// echo 'Mixed (Int / String): ' . $Timer->timeMeter(new MergeSort, 'sortMixed', $mixed) . "<br>";
// echo 'Floats: ' . $Timer->timeMeter(new MergeSort, 'sort', $floats) . "<br>";
// echo 'Dates: ' . $Timer->timeMeter(new MergeSort, 'sortDate', $dates) . "<br>";

// echo 'Integers: ' . $Timer->timeMeter(new HeapSort, 'sort', $integers) . "<br>";
// echo 'Strings: ' . $Timer->timeMeter(new HeapSort, 'sort', $strings) . "<br>";
// echo 'Mixed (Int / String): ' . $Timer->timeMeter(new HeapSort, 'sortMixed', $mixed) . "<br>";
// echo 'Floats: ' . $Timer->timeMeter(new HeapSort, 'sort', $floats) . "<br>";
// echo 'Dates: ' . $Timer->timeMeter(new HeapSort, 'sortDate', $dates) . "<br>";

echo 'Integers: ' . $Timer->timeMeter(new InsertionSort, 'sort', $integers) . "<br>";
echo 'Strings: ' . $Timer->timeMeter(new InsertionSort, 'sort', $strings) . "<br>";
echo 'Mixed (Int / String): ' . $Timer->timeMeter(new InsertionSort, 'sortMixed', $mixed) . "<br>";
echo 'Floats: ' . $Timer->timeMeter(new InsertionSort, 'sort', $floats) . "<br>";
echo 'Dates: ' . $Timer->timeMeter(new InsertionSort, 'sortDate', $dates) . "<br>";
