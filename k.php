<?php
echo "<pre>";
for($r=1; $r<=8; $r++)
{
	for($c=1; $c<=6; $c++)
	{
		if(($r==1 and $c==1) or ($r==1 and $c==5) or ($r==2 and $c==1) or ($r==2 and $c==4) or ($r==3 and $c==1) or ($r==3 and $c==3) or ($r==4 and $c==1) or ($r==4 and $c==2) or ($r==5 and $c==1) or ($r==5 and $c==3) or ($r==6 and $c==1) or ($r==6 and $c==4) or($r==7 and $c==1) or ($r==7 and $c==5) or ($r==8 and $c==1) or($r==8 and $c==6))
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