<?php
require "Student.php";
require "ShowAge.php";
class Class10 extends Student
{
    use ShowAge;
    public $students = [];
    public function __construct()
    {
        echo "Student Management" . "<br>";
    }
  
    public function all_students()
    {
        $json = file_get_contents(__DIR__ . '/../students/student.json');
        $this->students = json_decode($json, true);
        return $this->students;
    }


    public function get_roll_number_one($roll)
    {
        $all_students = $this->all_students();
        // Define the closure
        $roll_number_one = function () use ($all_students, $roll) {
            foreach ($all_students as $single_student) {
                // Check if the roll matches
                if ($single_student['roll'] == $roll) {
                    return $single_student;
                }
            }
            return false;
        };
        // Call the closure and return its result
        return $roll_number_one();
    }
    public function show_title(){
        return $this->become_student();
    }
    public  function overriding(){
        echo "from class 10"."<br>"; 
    }
}