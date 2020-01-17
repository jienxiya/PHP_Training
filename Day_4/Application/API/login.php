<?php
session_start();
ini_set("display_errors",1);
include("../Functions.php");

$conn = connectToDB();

if(isset($_POST['login'])){
    // if(empty($_POST["email"]) || empty($_POST["password"])){
    //     $_SESSION["message"] = "Both fields are required!"
    // }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM persons WHERE email = '".$email."' and password = '".$password."'";
    $result = $conn->query($sql);

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
        $_SESSION["message"] = "Not Found!";
        header("Location: ../Login.php");
    }

    
}

?>