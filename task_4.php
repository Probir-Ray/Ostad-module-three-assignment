<?php

/**** 
 * Task 4: Multidimensional Array
 * Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
 ****/

 $studentGrades = array(
    "student_one" => array("Math" => 77, "English" => "65", "Science" => "79"),
    "student_two" => array("Math" => 61, "English" => "54", "Science" => "88"),
    "student_three" => array("Math" => 92, "English" => "71", "Science" => "97"),
);

function average_grades($studentGrades) {
  $the_students = array_keys($studentGrades);
  
      for($i = 0; $i < count($studentGrades); $i++) {
         $total = 0;
             foreach($studentGrades[$the_students[$i]] as $student => $score) {
                $total += $score;
             }
        
          echo PHP_EOL;
    
          $avg_mark = round($total/ count($studentGrades[$the_students[$i]]), 2);

          if($avg_mark > 80) {
            echo "A+";
          }
          else if($avg_mark > 70) {
            echo "A";
          }
          else if($avg_mark > 60) {
            echo "A-";
          }
          else if($avg_mark > 50) {
            echo "B";
          } else {
            echo "F";
          }
      }
}

average_grades($studentGrades);