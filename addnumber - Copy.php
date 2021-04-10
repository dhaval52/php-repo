<?php

for($x=1; $x<=30; $x++)
{
	$sum+=$x;


}echo "$sum";

echo "<br>";

//using while loop

$y = 1;

while($y <= 30)
{
 
  $sum1+=$y;
  $y++;
  

}echo "$sum1";

echo "<br>";


$z = 1;

do {
  $sum3+=$z;
  $z++;

  
  } while ($z <= 30);
  echo "$sum";
?>