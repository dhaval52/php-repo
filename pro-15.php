<?php
for($i=1; $i<=7; $i++)
{
	for($j=1; $j<=5; $j++)
	{
      if(($i==1 and $j>1 and $j<5) or ($i==7 and $j>1 and $j<5) or ($j==1 and $i>1 and $i<7) or ($j==5 and $i>1 and $i<4) or ($j==5 and $i>4 and $i<7)) 
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
?>