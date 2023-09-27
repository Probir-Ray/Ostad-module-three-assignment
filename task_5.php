<?php

/**** 
 * Task 5: Password Generator
 * Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
 ****/

 function generatePassword($length) {

    $sets = array();
    $sets[] = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
    $sets[] = 'abcdefghjkmnpqrstuvwxyz';
    $sets[] = '23456789';
    $sets[]  = '!@#$%^&*()_+';

    $password = '';
    
    
    foreach ($sets as $set) {
        $password .= $set[array_rand(str_split($set))];
    }


    while(strlen($password) < $length) {
        $randomSet = $sets[array_rand($sets)];
        $password .= $randomSet[array_rand(str_split($randomSet))]; 
    }
    
    return str_shuffle($password);
}

echo generatePassword(12);
