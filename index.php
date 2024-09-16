<?php 
require "./classes/Class10.php";
$class10 = new Class10();
$students = $class10->all_students();
$student = $class10->show_title();
$student = $class10->overriding();
$student = $class10->show_age();
$find_student_by_roll = $class10->get_roll_number_one(3);
print_r($find_student_by_roll);