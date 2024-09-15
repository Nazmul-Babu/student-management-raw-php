<?php 
require "./classes/Class10.php";

$class10 = new Class10();
$students = $class10->all_students();
$find_student_by_roll = $class10->get_roll_number_one(3);
print_r($find_student_by_roll);