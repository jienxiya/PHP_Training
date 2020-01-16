<?php 

    include("Functions.php");
    echo "<link rel='stylesheet' type='text/css' href='form.css' />";

	$conn = connectToDB();
	
	// Check connection
	if($conn === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	// Attempt select query execution
	$sql = "SELECT * FROM persons";
    $result = mysqli_query($conn, $sql);
    // echo gettype($result);
	if($result){
		if(mysqli_num_rows($result) > 0){
			echo "<table class='form'>";
				echo "<tr>";
					echo "<th>First Name</th>";
					echo "<th>Middle Name</th>";
					echo "<th>Last Name</th>";
					echo "<th>Email</th>";
					echo "<th colspan='2'>Action</th>";
                echo "</tr>";
			while($row = mysqli_fetch_array($result)){
                // echo gettype($row);
				echo "<tr>";
					echo "<td>" . $row['first_name'] . "</td>";
					echo "<td>" . $row['middle_name'] . "</td>";
					echo "<td>" . $row['last_name'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					$id = $row['id'];
					echo "<td><a href='#?id=$id'>Delete</a></td>";
					echo "<td><a href='#?id=$id'>Edit</a></td>";
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