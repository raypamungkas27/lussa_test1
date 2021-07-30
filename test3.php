<?php
 function sampling($chars, $size, $combinations = array()) {


    if (empty($combinations)) {
        $combinations = $chars;
    }

  
    if ($size == 1) {
        return $combinations;
    }

    $new_combinations = array();


    foreach ($combinations as $combination) {
        foreach ($chars as $char) {
            $new_combinations[] = $combination . $char;
        }
    }


    return sampling($chars, $size - 1, $new_combinations);

}


$chars = array(1, 2, 3);
$output = sampling($chars, 2);
var_dump($output);

    
    