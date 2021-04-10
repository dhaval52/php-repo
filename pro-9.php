<?php
echo "<table width='270' height='30' border= '3px'>";


for($i=0;$i<8;$i++)
{
	echo "<tr>";
	if($i % 2 == 0)
	{
 		for($j=0; $j<8; $j++)
 		{
   			if($j % 2 == 0)
   			{
 				echo "<td bgcolor='black' width='6px' height='30px'>";
   			}
   			else
   			{
 				echo "<td bgcolor='white' width='6px' height='30px'>";
 			}
 		}
 	}	
 	else
 	{
 		for($j=0; $j<8; $j++)
 		{
   			if($j % 2 != 0)
   			{
 				echo "<td bgcolor='black' width='6px' height='30px'>";
   			}
   			else
   			{
 				echo "<td bgcolor='white' width='6px' height='30px'>";
 			}
 		}
 	}echo "</tr>";
}
echo "</table>"
?>