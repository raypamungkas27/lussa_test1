<?php 
$array = array('1', '2', '1', '3', '4',
'5', '6', '7', '8');
$new_array = array();
foreach ($array as $key => $value) {
 if(isset($new_array[$value]))
     $new_array[$value] += 1;
 else
     $new_array[$value] = 1;
}
print_r($array);
echo "<br />";
echo "the duplicate element is :";
echo "<br />";
foreach ($new_array as $number => $n) {

 if($n > 1)
 echo $number;;
 echo "<br />";
}