<?php

/**** 
 * Task 3: Array Sorting
 * Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.
 ****/


$grades = [85, 92, 78, 88, 95];
function sort_grades($grades) {
    $sorting_arr = [];
    rsort($grades);

    foreach ($grades as $value) {
        $sorting_arr[] = $value;
    }
    return $sorting_arr;
}

$result = sort_grades($grades);
print_r($result);