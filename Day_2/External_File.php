<?php

// 1. function that can get the summary of two numbers.
    function getSum($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    };

// 2. function that can display data in an array
    function displayData($my_array){
        $datas = "";
        foreach($my_array as $data){
            $datas .= " $data";
        }
        return $datas;
    };

// 3. function that can display multidimensional array
    
    function displayMultidimensionalArray(){
        $my_array = array(
            "food" => array(
                0 => 'Go',
                1 => 'Glow',
                2 => 'Grow'
            ),
            "section" => array(
                "sectionA" => ["Mary", "Jane", "Mon","Sun","Sen"],
                "sectionB" => ["Kan", "Ken", "Kon","Kun","Kin"]
            ),
            "ph_presidents" => array(
                0 => 'Marcos',
                1 => 'Noynoy',
                2 => 'Duterte'
            )
        );

        $array = "";
        foreach($my_array as $category=>$content){
            $array .= "<br>$category" . ": <br>";
            foreach($content as $data){
                if($data == $my_array["section"]["sectionA"]){
                    $array .= "&nbsp;&nbsp;Section A: ";
                    foreach($my_array["section"]["sectionA"] as $sub){
                        $array .= $sub . " ";
                    }
                }else if($data == $my_array["section"]["sectionB"]){
                    $array .= "<br>&nbsp;&nbsp;Section B: ";
                    foreach($my_array["section"]["sectionB"] as $sub){
                        $array .= $sub . " ";
                    }
                }else{
                    $array .= "&nbsp;&nbsp;$data";
                }
                
            }
        }
        return $array;
    }

// 4. function that can create associative array and return it in your working file.
    function createAssociativeArray($key, $value){
        $array = array();
        $array += array($key => $value);
        return $array;
    }

// 5. function that can add data to an existing array 
    $fruits = ["banana","mango","apple"];

    function addDataInAssociativeArray($key,$value){
        global $fruits;
        $fruits[$key] = $value;
        echo "<br>Successfully Added!";
        return $fruits;
    }

    function addDataInNumericArray($data){
        global $fruits;
        array_push($fruits,$data);
        echo "<br>Successfully Added!";
        return $fruits;
    }

// 6. display data from number 5.
    function display(){
        global $fruits;
        print_r($fruits);
    }
?>