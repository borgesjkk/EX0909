<?php
	$num1 = 0;
	$num2 = 0;
	$resp = 0;
	function soma($num1,$num2,$resp){
 
		$resp = $num1 + $num2;
 
		if ($resp > 20) 
		{
			echo"somando mais 8 </br>"; 
			$resp = $resp + 8;
			echo $resp;
 
		}elseif ($resp < 20) {
			echo"subtraindo 5 </br>"; 
			$resp = $resp -5;
			echo $resp;
		}else {
			echo "burro";
		}
 
		
	};
	soma(5,5,0);
 
 
?>


 