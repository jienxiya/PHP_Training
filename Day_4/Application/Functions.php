<?php

class Manage{
    private $conn;

    function connectToDB(){
        return mysqli_connect("localhost", "root", "","pntrainings");
    }

    function deleteUser(){
        $conn = $this->connectToDB();
        $id = $_REQUEST['id'];
        if(conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "DELETE  FROM persons WHERE id='".$id."'";
        $query = mysqli_query($conn, $sql);
        header("Location: ./API/viewUsers.php");
    }

    function removeMedicine(){
        $conn = $this->connectToDB();
        $id = $_REQUEST['id'];
        if(conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "DELETE  FROM medicines WHERE id='".$id."'";
        $query = mysqli_query($conn, $sql);
        header("Location: ./API/viewMedicines.php");
    }

    function updateUser(){
        $conn = $this->connectToDB();
        // print_r($_POST);
        if (isset($_POST['submit'])){
            // print_r($_POST);
            $id = $_POST['id'];
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $query = "UPDATE persons set first_name='". $first_name . "', last_name='". $last_name ."',
                        email='". $email ."',password='". $password ."' where id='".$id."'"; 
            // echo $query;
            $result = mysqli_query($conn, $query) or die ( mysqli_error($query));
    
            header("Location: ./API/viewUsers.php"); 
        }
    }

    function updateMedicine(){
        $conn = $this->connectToDB();
        // print_r($_POST);
        if (isset($_POST['submit'])){
            // print_r($_POST);
            $id = $_POST['id'];
            $generic_name = $_POST['generic_name'];
            $brand_name = $_POST['brand_name'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
    
            $query = "UPDATE medicines set generic_name='". $generic_name . "', brand_name='". $brand_name ."',
                        price='". $price ."',quantity='". $quantity ."' where id='".$id."'"; 
            // echo $query;
            $result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
    
            header("Location: ./API/viewMedicines.php"); 
        }
    }
}


?>