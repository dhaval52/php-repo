<?php
echo "<pre>";
for($r=1; $r=7; $r++)
{
	for($c=1; $c<=5; $c++)
	{
		if($r==1 and $c<5)
		{
			echo "*";
		}
		else
		{
			echo " ";
		}
	}echo "<br>";
}
echo "</pre>";
?>