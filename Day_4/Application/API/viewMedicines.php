<?php

include("../Functions.php");
echo "<link rel='stylesheet' type='text/css' href='../form.css' />";

$manage = new Manage();
$conn = $manage->connectToDB(); //own function that connect to database

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error()); //PHP Error Handling
}

// Attempt select query execution
$sql = "SELECT * FROM medicines";
$result = mysqli_query($conn, $sql);
// echo gettype($result);
if($result){
    if(mysqli_num_rows($result) > 0){
        echo "<br><br>";
        echo "<center><h2>List of ApPharmacy Users</h2></center>";
        echo " <br><br>";
        echo "<hr>";
        echo "<table class='form'>";
            echo "<tr>";
                echo "<th>Generic Name</th>";
                echo "<th>Brand Name</th>";
                echo "<th>Price</th>";
                echo "<th>Quantity</th>";
                echo "<th colspan='2'>Action</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){ //loop
            // echo gettype($row);
            echo "<tr>";
                echo "<td>" . $row['generic_name'] . "</td>";
                echo "<td>" . $row['brand_name'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                $id = $row['id'];
                echo "<td><a href='../RemoveMedicine.php?id=$id'>Delete</a></td>";
                echo "<td><a href='../updateMedicine.php?id=$id'>Edit</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>
