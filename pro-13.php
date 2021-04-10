<?php
  // for($i = 0; $i <7; $i++){
  // 	for($j = 0; $j < 7; $j++){
  // 		if((($j == 1 or $j == 5) and $i != 0) or (($i == 0 or $i == 3) and ($j > 1 and $j < 5))){
  // 			echo "*";
  // 		}
  // 		else{
  // 			echo " ";
  // 		}
  		
  // 	}
  // 	echo "<br>";
  // }

  for($i = 0; $i<7; $i++){
  	for($j = 0; $j<7; $j++){
  		if($j == 1  or ($i == 0) or ($i == 3) or ($i == 6)){
  			echo "*";
  		}
  		else{
  			echo " ";
  		}
  	}
  	echo"<br>";
  }
?>