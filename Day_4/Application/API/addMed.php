<?php
    session_start();
    ini_set("display_errors",1);
    include("../Functions.php");
    $manage = new Manage();
    $conn = $manage->connectToDB(); //own function that connect to database

    if(isset($_POST['submit'])){
        
        $generic_name = $_POST['generic_name'];
        $brand_name = $_POST['brand_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        if($_POST['generic_name'] == "" || $_POST['brand_name'] == "" || $_POST['price'] == "" || $_POST['quantity'] == ""){
            $_SESSION["message"] = "All fields are required!";
            header("Location: ../addMedicine.php");
        }else{
            $sql = "INSERT INTO medicines (generic_name, brand_name, price, quantity)
                 VALUES ('$generic_name', '$brand_name', '$price', '$quantity')";
            $query = mysqli_query($conn, $sql);
            header("Location: ../Dashboard.php");
        }
    }
    mysqli_close($conn);


?>