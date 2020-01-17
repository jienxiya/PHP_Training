<?php

function connectToDB(){
    return mysqli_connect("localhost", "root", "","pntraining");
}


// function update($first_name,$middle_name,$last_name,$email){
//     return "UPDATE persons set first_name='". $first_name . "', middle_name='". $middle_name ."',
//     last_name='". $last_name ."',email='". $email ."' where id='".$id."'";
// }

function create(){
    $conn = connectToDB(); //own function that connect to database

    if(isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($first_name == '' || $last_name == '' || $email == '' || $password == ''){
            echo '<script type="text/javascript">';
            echo 'alert("Please fill in all the field!)';
            echo '</script>';
        }else{
            $sql = "INSERT INTO persons (first_name, last_name, email, password)
                 VALUES ('$first_name', '$last_name', '$email', '$password')";
            $query = mysqli_query($conn, $sql);
        }
    }
    mysqli_close($conn);
}

function delete(){
    $conn = connectToDB();

    $id = $_REQUEST['id'];
    if($conn === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	// Attempt select query execution
	$sql = "DELETE  FROM persons WHERE id='".$id."'";
    $query = mysqli_query($conn, $sql);
    header("Location: viewUsers.php");
}

function update(){
    $conn = connectToDB();
    // print_r($_POST);
    if (isset($_POST['submit'])){
        // print_r($_POST);
        $id = $_POST['id'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // $sql = updateQuery($first_name,$middle_name, $last_name,$email); // own function
        $query = "UPDATE persons set first_name='". $first_name . "', last_name='". $last_name ."',
                    email='". $email ."',password='". $password ."' where id='".$id."'"; 
        // echo $query;
        $result = mysqli_query($conn, $query) or die ( mysqli_error($query));

        header("Location: viewUsers.php"); 
    }
}

?>