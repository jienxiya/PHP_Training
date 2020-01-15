<?php
    include("External_file.php");

    // $newClass = new test();
    // // $newClass->writeMessage();
    // $newClass->write();

    // $originalValue = 10;
    // $newClass->pass($originalValue); //prints 15

// sessions
    //reset is destroy , abort is stop , destroying session is stopiing all sessions, session stored in server

    session_start();
    // session_destroy();

    if(isset($_SESSION['counter'])){
        $_SESSION['counter'] += 1;
    }else{
        $_SESSION['counter'] = 1;
    }

    if(isset($_SESSION['tens'])){
        $_SESSION['tens'] += 1;
    }else{
        $_SESSION['tens'] = 1;
    }

    $msg = "You have visited this page " . $_SESSION['counter'];
    $msg .= " in this session.";

    echo $msg . "<br>";
    echo $_SESSION['tens']."<br>";

    unset($_SESSION['tens']); // reset the session

//cookies
//cookies are saved in client-end  
    // if(!isset($_COOKIE["username"])){
    //     setcookie("username", "Gwa Po Ko", time()+30*24*60*60);
    // }else{
    //     setcookie("username", "Di Ko Gwa Po", time()+30*24*60*60);
    // }
    // echo $_COOKIE["username"];

//classes
    // class PNTraining{
    //     //constructor
    //     public function __construct(){
    //         echo 'The class "'. __class__ . '"was initiated"';
    //     }

    //     public function test(){
    //         echo "<br>I am a test though!";
    //     }

    //     public function __destruct(){
    //         echo '<br>The class "'. __class__ . '"was destructed"';
    //     }
    // }

    // $a = new PNTraining();
    // echo $a->test();

?>