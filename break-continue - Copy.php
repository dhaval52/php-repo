<?php
$x = 0;

while($x <= 10)
{
	if($x == 5)
	{
		$x++;
		continue;
	}
	echo "The value is $x <br>";	
	$x++;
}