<?php
echo "<pre>";
for($r=1; $r<=7; $r++)
{
	for($c=1; $c<=5; $c++)
	{
 if(($r==1 and $c<5) or($r==7 and $c<5) or $c==1 or($c==5 and $r>1 and $r<7))
     	{
			echo "*";
	 	}
	 	else
	 	{
	 		echo " ";
	  	}
	}
	echo "<br>";
}
echo "</pre>"; 
?>