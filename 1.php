<?php
for($x=1; $x<=10; $x++)
{
	if($x<10)
	{
		echo "$x-";
	}
	elseif($x<=10)
	{
		echo "$x";
	}
}
echo "<br>";

//using while loop


$x = 1;

while($x <= 10) 
{
	
  	echo $x;
  	if($x<10)
  	{
  		echo "-";
  	}
  	$x++;
}
echo "<br>";


//using do while loop


$x = 1;

do 
{
  echo $x;
  if($x<10)
   {
  		echo "-";
  	}
  	else
  	{
  		echo "";
  	}
  $x++;
} while ($x <= 10);

?>