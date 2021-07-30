<?php
$numbers = array(1,5,2,8,5,2,9,0,4,7,2);
$array_size = count($numbers);

echo "Numbers before sort: ";
for ( $i = 0; $i < $array_size; $i++ )
   echo $numbers[$i];
echo "<br>";

for ( $i = 0; $i < $array_size; $i++ )
{
   for ($j = 0; $j < $array_size; $j++ )
   {
      if ($numbers[$i] < $numbers[$j])
      {
         $temp = $numbers[$i];
         $numbers[$i] = $numbers[$j];
         $numbers[$j] = $temp;
      }
   }
}

echo "Numbers after sort: ";
for( $i = 0; $i < $array_size; $i++ )
   echo $numbers[$i];
   echo "<br>";