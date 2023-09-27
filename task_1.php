<?php

/**** 
 * Task 1: String Manipulation
 * Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
 * Convert the string to all lowercase.
 * Replace "brown" with "red" in the string.
 * Print the modified text.
 ****/


$text = "The quick brown fox jumps over the lazy dog.";
function text_method($text) {
    // Convert to all lowercase
    $convert_to_lowercase = strtolower($text);
    echo $convert_to_lowercase . PHP_EOL;

    // replace "brown" with "red"
    $modified_text = str_replace("brown", "red", $text);
    echo $modified_text;
}
text_method($text);
