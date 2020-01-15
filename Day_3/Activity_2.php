<?php

// 1.Write a program that uses public and private variables and functions in a class.
    class Person{
        //public variable
        public $name = "Mary Jane";
        public $age = 20;
        //private variable
        private $salary = 20000;

        function public(){
            echo "Hi " . $this->name .  "! You are now " . $this->age . " years old.<br>" ;
            echo "This is public function that uses public variables.<br>" ;
        }

        private function private(){
            echo "<br>Hi " . $this->name, "!, Your salary is " . $this->salary . " pesos.<br>" ;
            echo "This is private function that uses private and public variables<br>" ;
        }

        function getPrivate(){
            echo $this->private();
        }
    }

    $newClass = new Person();
    $newClass->public();
    $newClass->getPrivate();


/* 2.Using session, create a variable that stores your name and email, then choose browser from a given array (
    'Firefox','Chrome','Internet Explorer','Safari','Opera')*/
    function session(){
        session_start();
        $_SESSION['name'] = "Mary Jane";
        $_SESSION['email'] = "mj@gmail.com";
        $_SESSION['browser'] = "Chrome";

        if(isset($_SESSION['name']) && isset($_SESSION['email'])){
            echo "Name: " . $_SESSION['name'] . "<br>Email: " . $_SESSION['email'] . "<br>Browser: " . $_SESSION['browser'];
        }else{
            echo "Name and Email is not set!";
        }
    }
    echo "<br>";
    session();


// 3. Write a program to find the maximum and minimum marks from the following set of arrays. 
    $marks1 = array(360,310,310,330,313,375,456,111,256);
	$marks2 = array(350,340,356,330,321);
    $marks3 = array(630,340,570,635,434,255,298);
    $result = array_merge($marks1,$marks2,$marks3);
    function minMax(){
        global $result;
        echo "<br>Maximum marks: " . max($result);
        echo "<br>Minimum marks: " . min($result);
    }
    echo "<br>";
    minMax();



?>