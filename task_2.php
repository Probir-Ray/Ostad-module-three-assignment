<?php

/**** 
 * Task 2: Array Manipulation
 * Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
 ****/


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function arr_traverse($arr) {
    $new_arr = [];
    for($el = 0; $el < count($arr); $el++) {
        if($arr[$el] % 2 == 0) {
            continue;
        } else {
          $new_arr[] = $arr[$el];
        }
    }
    return $new_arr;
 }

 $result = arr_traverse($numbers);
 print_r($result);