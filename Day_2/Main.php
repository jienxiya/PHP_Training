<?php

    include ("External_File.php");
// 1.
    echo "Sum: " . getSum(1,2) . "<br>";

// 2.
    echo "<br>Array Data: " . displayData([1,2,3,4,5]);

// 3.
    echo "<br><br>Multidimensional Array: " . displayMultidimensionalArray();

// 4.
    $my_associativeArray = array();
    $my_associativeArray += createAssociativeArray("MJ",20);
    $my_associativeArray += createAssociativeArray("Monica",19);
    $my_associativeArray += createAssociativeArray("Ching",20);
    $my_associativeArray += createAssociativeArray("DR",20);
    echo "<br><br>Associative Array: <br>";
    print_r($my_associativeArray);

// 5.

    $fruits = ["banana","mango","apple"];
    echo "<br><br>Adding data in an existing array: <br>";
    addDataInNumericArray($fruits,"orange");
    addDataInNumericArray($fruits,"ponkan");
    addDataInAssociativeArray($fruits,"Nangka","Lami");
    addData($fruits,"bayabas");

// 6.
    echo "<br><br>Array after adding data: <br>";
    displayNumber5($fruits);
    echo "<br>";
    display();

?>