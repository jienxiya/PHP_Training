<?php

// 1.
    // $color = array('white', 'green', 'red', 'blue', 'black');
    // echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} 
    // carpet, the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady.
    // - Richard M. Nixon"

// 2.
    // $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
    //             "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
    //             "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
    //             "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
    //             "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
    //             "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
    //             "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", 
    //             "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

    //     // echo "The capital of $ceu['Italy']"
    //     foreach($ceu as $country => $capital){
    //         echo "The capital of {$country} is {$capital} <br>";
    //     }


// 3.  Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
    $x = array(1, 2, 3, 4, 5);
    print_r($x);

    array_splice($x, 2,1);
    echo "<br>";
    print_r($x);

?>

