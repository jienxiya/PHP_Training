<?php

// 2. Display divisible by 2,3,5.

$divisibleBy2 = [];
$divisibleBy3 = [];
$divisibleBy5 = [];

    for($i = 1 ; $i <= 15 ; $i++){
        if($i % 2 == 0){
            array_push($divisibleBy2, $i);
        }else if($i % 3 == 0){
            array_push($divisibleBy3, $i);
        }else if($i % 5 == 0){
            array_push($divisibleBy5, $i);
        }
    }
    echo "Divisible by 2: ";
    foreach($divisibleBy2 as $num){
        echo $num. " ";
    }
    
    echo "<br>";
    echo "Divisible by 3: ";
    foreach($divisibleBy3 as $num){
        echo $num. " ";
    }
    
    echo "<br>";
    echo "Divisible by 5: ";
    foreach($divisibleBy5 as $num){
        echo $num. " ";
    }

    //using function
    // function isDivisible($divisor){
    //     echo "Divisible by $divisor <br>";
    //     for($i = 1 ; $i <= 15 ; $i++){
    //         if($i % $divisor == 0){
    //             echo $i . "<br>";
    //         }
    //     }
    // }
    // isDivisible(2);
    // isDivisible(3);
    // isDivisible(5);

?>