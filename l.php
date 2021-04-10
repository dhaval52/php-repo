<?php
echo "<pre>";
for($r=1; $r<=7; $r++)
{
	for($c=1; $c<=5; $c++)
	{
		if(($r<=7 and $c==1) or ($r==7 and $c>1))
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