<?php
    session_start();
    ini_set("display_errors",1);
    include("../Functions.php");
    $manage = new Manage();
    $conn = $manage->connectToDB(); //own function that connect to database

    if(isset($_POST['submit'])){
        
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($_POST['firstname'] == "" || $_POST['lastname'] == "" || $_POST['email'] == "" || $_POST['password'] == ""){
            $_SESSION["message"] = "All fields are required!";
            header("Location: ../Register.php");
        }else{
            $sql = "INSERT INTO persons (first_name, last_name, email, password)
                 VALUES ('$first_name', '$last_name', '$email', '$password')";
            $query = mysqli_query($conn, $sql);
            header("Location: ../Login.php");
        }
    }
    mysqli_close($conn);


?>