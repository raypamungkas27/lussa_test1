
<?php

function maxProduct($arr, $n)
{

    $minVal = $arr[0];
    $maxVal = $arr[0];
 
    $maxProduct = $arr[0];
 
    for ($i = 1; $i < $n; $i++)
    {
 
        if ($arr[$i] < 0)
        {
            $temp = $maxVal;
            $maxVal = $minVal;
            $minVal = $temp;
        }
 

        $maxVal = max($arr[$i], $maxVal * $arr[$i]);
        $minVal = min($arr[$i], $minVal * $arr[$i]);
 

        $maxProduct = max($maxProduct, $maxVal);
    }
 

    return $maxProduct;
}

$arr = array(-6,4,-5,8,-10,0,8);
$n = sizeof($arr);
echo "Maximum product is " .
         maxProduct($arr, $n) . "\n";
 

?>