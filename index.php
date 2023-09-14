<?php
set_time_limit(1500);

require_once 'Services/JitStatus.php';
require_once 'Services/GetArray.php';
require_once 'Services/Timer.php';
require_once 'Algorithms/QuickSort.php';
require_once 'Algorithms/MergeSort.php';
require_once 'Algorithms/HeapSort.php';
require_once 'Algorithms/InsertionSort.php';
require_once 'Algorithms/BubbleSort.php';

function dd($content) {
    return die(var_dump($content));
}

$JitStatus = new JitStatus;
$Timer = new Timer;
echo 'JIT: ' . $JitStatus->status . "<br><br>";

$integers = array_map('intval', GetArray::get('integers1.txt'));
$strings = GetArray::get('strings1.txt');
$mixed = GetArray::get('mixed1.txt');
$string_dates = GetArray::get('dates1.txt');
$dates = array_map(function($string_dates) {
    return new DateTime($string_dates);
}, $string_dates);
$floats = GetArray::get('floats1.txt');

// QUICK SORT ------------------------------------------------------------
// echo 'Integers: ' . $Timer->timeMeter(new QuickSort, 'sort', $integers) . "<br>";
// echo 'Strings: ' . $Timer->timeMeter(new QuickSort, 'sort', $strings) . "<br>";
// echo 'Mixed (Int / String): ' . $Timer->timeMeter(new QuickSort, 'sortMixed', $mixed) . "<br>";
// echo 'Floats: ' . $Timer->timeMeter(new QuickSort, 'sort', $floats) . "<br>";
// echo 'Dates: ' . $Timer->timeMeter(new QuickSort, 'sortDate', $dates) . "<br><br>";

echo '<table>';
for ($i=0; $i < 5; $i++) { 
    echo '<tr><td>' . $Timer->timeMeter(new QuickSort, 'sort', $integers) . "</td>";
    echo '<td>' . $Timer->timeMeter(new QuickSort, 'sort', $strings) . "</td>";
    echo '<td>' . $Timer->timeMeter(new QuickSort, 'sortMixed', $mixed) . "</td>";
    echo '<td>' . $Timer->timeMeter(new QuickSort, 'sort', $floats) . "</td>";
    echo '<td>' . $Timer->timeMeter(new QuickSort, 'sort', $dates) . "</td></tr>";
}
echo '</table>';

// MERGE SORT ------------------------------------------------------------
// echo 'Integers: ' . $Timer->timeMeter(new MergeSort, 'sort', $integers) . "<br>";
// echo 'Strings: ' . $Timer->timeMeter(new MergeSort, 'sort', $strings) . "<br>";
// echo 'Mixed (Int / String): ' . $Timer->timeMeter(new MergeSort, 'sortMixed', $mixed) . "<br>";
// echo 'Floats: ' . $Timer->timeMeter(new MergeSort, 'sort', $floats) . "<br>";
// echo 'Dates: ' . $Timer->timeMeter(new MergeSort, 'sortDate', $dates) . "<br>";

echo '<table>';
for ($i=0; $i < 5; $i++) { 
    echo '<tr><td>' . $Timer->timeMeter(new MergeSort, 'sort', $integers) . "</td>";
    echo '<td>' . $Timer->timeMeter(new MergeSort, 'sort', $strings) . "</td>";
    echo '<td>' . $Timer->timeMeter(new MergeSort, 'sortMixed', $mixed) . "</td>";
    echo '<td>' . $Timer->timeMeter(new MergeSort, 'sort', $floats) . "</td>";
    echo '<td>' . $Timer->timeMeter(new MergeSort, 'sort', $dates) . "</td></tr>";
}
echo '</table>';

// HEAP SORT ------------------------------------------------------------
// echo 'Integers: ' . $Timer->timeMeter(new HeapSort, 'sort', $integers) . "<br>";
// echo 'Strings: ' . $Timer->timeMeter(new HeapSort, 'sort', $strings) . "<br>";
// echo 'Mixed (Int / String): ' . $Timer->timeMeter(new HeapSort, 'sortMixed', $mixed) . "<br>";
// echo 'Floats: ' . $Timer->timeMeter(new HeapSort, 'sort', $floats) . "<br>";
// echo 'Dates: ' . $Timer->timeMeter(new HeapSort, 'sortDate', $dates) . "<br>";

echo '<table>';
for ($i=0; $i < 5; $i++) { 
    echo '<tr><td>' . $Timer->timeMeter(new HeapSort, 'sort', $integers) . "</td>";
    echo '<td>' . $Timer->timeMeter(new HeapSort, 'sort', $strings) . "</td>";
    echo '<td>' . $Timer->timeMeter(new HeapSort, 'sortMixed', $mixed) . "</td>";
    echo '<td>' . $Timer->timeMeter(new HeapSort, 'sort', $floats) . "</td>";
    echo '<td>' . $Timer->timeMeter(new HeapSort, 'sort', $dates) . "</td></tr>";
}
echo '</table>';

// INSERTION SORT ------------------------------------------------------------
// echo 'Integers: ' . $Timer->timeMeter(new InsertionSort, 'sort', $integers) . "<br>";
// echo 'Strings: ' . $Timer->timeMeter(new InsertionSort, 'sort', $strings) . "<br>";
// echo 'Mixed (Int / String): ' . $Timer->timeMeter(new InsertionSort, 'sortMixed', $mixed) . "<br>";
// echo 'Floats: ' . $Timer->timeMeter(new InsertionSort, 'sort', $floats) . "<br>";
// echo 'Dates: ' . $Timer->timeMeter(new InsertionSort, 'sort', $dates) . "<br>";

echo '<table>';
for ($i=0; $i < 5; $i++) { 
    echo '<tr><td>' . $Timer->timeMeter(new InsertionSort, 'sort', $integers) . "</td>";
    echo '<td>' . $Timer->timeMeter(new InsertionSort, 'sort', $strings) . "</td>";
    echo '<td>' . $Timer->timeMeter(new InsertionSort, 'sortMixed', $mixed) . "</td>";
    echo '<td>' . $Timer->timeMeter(new InsertionSort, 'sort', $floats) . "</td>";
    echo '<td>' . $Timer->timeMeter(new InsertionSort, 'sort', $dates) . "</td></tr>";
}
echo '</table>';

// BUBBLE SORT ------------------------------------------------------------
// echo 'Integers: ' . $Timer->timeMeter(new BubbleSort, 'sort', $integers) . "<br>";
// echo 'Strings: ' . $Timer->timeMeter(new BubbleSort, 'sort', $strings) . "<br>";
// echo 'Mixed (Int / String): ' . $Timer->timeMeter(new BubbleSort, 'sortMixed', $mixed) . "<br>";
// echo 'Floats: ' . $Timer->timeMeter(new BubbleSort, 'sort', $floats) . "<br>";
// echo 'Dates: ' . $Timer->timeMeter(new BubbleSort, 'sortDate', $dates) . "<br>";

echo '<table>';
for ($i=0; $i < 5; $i++) { 
    echo '<tr><td>' . $Timer->timeMeter(new BubbleSort, 'sort', $integers) . "</td>";
    echo '<td>' . $Timer->timeMeter(new BubbleSort, 'sort', $strings) . "</td>";
    echo '<td>' . $Timer->timeMeter(new BubbleSort, 'sortMixed', $mixed) . "</td>";
    echo '<td>' . $Timer->timeMeter(new BubbleSort, 'sort', $floats) . "</td>";
    echo '<td>' . $Timer->timeMeter(new BubbleSort, 'sort', $dates) . "</td></tr>";
}
echo '</table>';
