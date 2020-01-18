<?php
session_start();
ini_set("display_errors",1);
include("../Functions.php");

$manage = new Manage();
$conn = $manage->connectToDB(); //own function that connect to database

if(isset($_POST['login'])){
    if($_POST['email'] == "" || $_POST['password'] == ""){
        $_SESSION["message"] = "Both fields are required!";
        header("Location: ../Login.php");
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM persons WHERE email = '".$email."' and password = '".$password."'";
        $result = $conn->query($sql);
        // print_r($result);

        //cookies
        if(isset($_POST['remember'])){
            $cookie_name = "user";
            setcookie($cookie_name, $email, time() + (86400 * 30), "/"); // 86400 = 1 day
        }

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["login"] = true;
            header("Location: ../Dashboard.php");
        
        }else{
            $_SESSION["login"] = false;
            $_SESSION["message"] = "Account doesn't exist!";
            header("Location: ../Login.php");
        }
    }
}

?>