<?php

class student{
    //constructors
    public function __construct($fName,$lName){
        $this->fName = $fName;
        $this->lName = $lName;
    }

   
    public function say_name(){
        echo "My name is " .$this->fName . $this->lName;
    }

}

// $stud = new student();
// print_r($stud);

 //inheritance
class MathStudent extends student{
    function sum_numbers($fNum,$sNum){
        $sum = $fNum + $sNum;
        echo $this->fName . " said that the sum of " . $fNum , "+" . $sNum . " is " . $sum;
    }
}

$math = new MathStudent("Mary Jane" , "Paller");
$math->sum_numbers(1,3);

?>