<?php
echo "<pre>";
for($r=1; $r<=8; $r++)
{
	for($c=1; $c<=5; $c++)
	{
		if(($r==1 and $c==2)or($r==1 and $c==3)or($r==1 and $c==4)or($r>1 and $c==1)or($r>1 and $c==5)or($r==4 and $c<=5))
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