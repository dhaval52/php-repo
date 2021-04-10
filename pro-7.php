<?php
$str = "w3resource";

// print_r(var_dump($str));

// echo strlen($str);

for($div=0; $div<=strlen($str);$div++)
{
	if($str[$div] =='r')
	{
		$count  = $count+1;
	}

}echo "$count";
?>