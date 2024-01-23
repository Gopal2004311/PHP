<?php 
class student{
    public $roll_number;
    public $student_name;
    public $percentage;
    function studentInformation()
    {
        echo $this->roll_number."<br>";
        echo $this->student_name."<br>";
        echo $this->percentage."<br>";
    }
}

$s1=new student();
$s1->student_name="rakesh";
$s1->roll_number=235252;
$s1->percentage=80;
$s1->studentInformation();

?>