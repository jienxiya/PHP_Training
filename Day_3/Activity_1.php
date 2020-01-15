<?php
// 1. Write a program that can calculate the factorial of a number, you can use a recursive function (a function that calls itself)
    function calculateFactorial($num){
        $count = 1;
        for($i = $num; $i != 1; $i--){
            $count *= $i;
        }
        return $count;
    }

    function calculateFactorialRecursive($num){
        if($num < 2){
            return 1;
        }else{
            return $num * calculateFactorialRecursive($num - 1);
        } 
        return $num;
    }
    echo "<br>";
    echo calculateFactorialRecursive(4)."<br>";
    // echo calculateFactorial(4);

// 2. Write a program that can create a chessboard, you can use html elements
    function createChessboard(){
        echo '<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">';
            for($row=1;$row<=8;$row++){
                echo "<tr>";
                for($col=1;$col<=8;$col++){
                    $total=$row+$col;
                    if($total%2==0){
                        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                    }else{
                        echo "<td height=30px width=30px bgcolor=#000000></td>";
                    }
                }
                echo "</tr>";
            }
        echo "</table>";
    }
    echo "<br>";
    createChessboard();

/* 3. Write a program that can remove a specific elements in a numeric array, content of array is from January to December , 
if I'll remove January, January is removed, please take note that I'm not using index key here in removing the element, 
use the value instead. */
    $month = ["January","February","March", "April","May","June","July","August","September","October","November","December"];
    function removeElement($element){
        global $month;
        for($i = 0; $i <= count($month); $i++){
            if($element == $month[$i]){
                unset($month[$i]);
            }
        }
        print_r($month);
    }
    echo "<br>";
    removeElement("February");

// 4. Write a  program to display string, values within a table. Table columns would be  Name and Salary. You can use HTML tables
    class tableRecord{
        function table(){
            echo '<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">';
                echo "<tr>";
                    echo "<th>Name";
                    echo "<th>Salary";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Mary Jane";
                    echo "<td>20,000";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Monica";
                    echo "<td>342,343";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Princess";
                    echo "<td>23456778";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Ching";
                    echo "<td>123456";
                echo "</tr>";
            echo "</table";
        }
    }

    echo "<br>";
    $new = new tableRecord();
    $new->table();

// 5. Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers.
    function charVariable($num){
        $d = 'A00';
        $a = str_split($d);
        for($i = 1; $i <= $num; $i++){
            $a[2] = $i;
            echo implode("",$a) . "<br>";
        }
    }
    echo "<br>";
    charVariable(8);

// 6. Write a program to get last modified information of a file (the file you're working on).
    function getInfo(){
        $current_file_name = basename("C:\Users\Public\Documents\xampp\htdocs\PHP_Training\Day_3\Activity_1.php");
        $file_last_modified = filemtime($current_file_name);
        echo "Filename: " . $current_file_name . "<br>";
        echo "Last modified: " . date("l, dS F, Y, H:ia", $file_last_modified)."<br>";
    }
    echo "<br>";
    getInfo();

// 7. Write a program which changes the color of the first character of a word.
    function colorFirstChar($string){
        $string = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$string);
        echo $string;
    }
    echo "<br>";
    colorFirstChar("Kapoy Na Kaayu");














?>