<?php
    include("Functions.php"); // file that contains all the functions I made.

    $conn = connectToDB(); //own function that connect to database

    if(isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $middle_name = $_POST['middlename'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        if($first_name == '' || $middle_name == '' || $last_name == '' || $email == ''){
            echo '<script type="text/javascript">';
            echo 'alert("Please fill in all the field!)';
            echo '</script>';
        }else{
            $sql = insertQuery($first_name,$middle_name, $last_name,$email); // own function
            $query = mysqli_query($conn, $sql);
        }
    }
    mysqli_close($conn);

    include("Buttons.php");

?>