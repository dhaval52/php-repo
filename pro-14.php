<?php
for($row=1; $row<=7; $row++)
{
	for($col=1; $col<=5; $col++)
	{

	if($col == 1 or ($row==1 and $col<5) or ($row==4 and $col<5) or ($row==7 and $col<5) or ($row==2 and $col==5) or ($row==3 and $col==5) or($row ==5 and $col==5) or ($row==6 and $col==5))  
		{
			echo "*";
		}                                                                        
		else
		{
			echo "   ";
		}
	}echo "<br>";
}
//($col == 1 ) or
//($row==1 and $col<5) or
//($row==4 and $col<5) or
//($row==7 and $col<5) or
//($row==2 and $col<=5)
?>