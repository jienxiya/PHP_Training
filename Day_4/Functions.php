<?php

function connectToDB(){
    return mysqli_connect("localhost", "root", "admin123","pntraining");
}

function insertQuery($first_name,$middle_name,$last_name,$email){
    return "INSERT INTO persons (first_name, middle_name, last_name, email)
    VALUES ('$first_name','$middle_name', '$last_name', '$email')";
}

function updateQuery($first_name,$middle_name,$last_name,$email){
    return "UPDATE persons set first_name='". $first_name . "', middle_name='". $middle_name ."',
    last_name='". $last_name ."',email='". $email ."' where id='".$id."'";
}

?>