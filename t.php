<?php
echo "<pre>";
for($r=1; $r<=6; $r++)
{
	for($c=1; $c<=5; $c++)
	{
		if(($r==1 and $c<=5)or($r==2 and $c==3)or($r==3 and $c==3)or($r==4 and $c==3)or($r==5 and $c==3)or($r==6 and $c==3))
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