<?php 
	function valor($num1,$por1,$por2,$por3){
 
 
	
 
	if ($por1 == 0) {
		$por1 = $num1 % 10;
		echo "é divisivel por 10 </br>";
		echo "o valor é </br>" . $por1;
	}else {
		echo "burro";
	}if ($por2 == 0) {
		$por2 = $num1 % 5;
		echo "<br/>é divisivel por 5 </br>";
		echo "o valor é </br>" . $por2;
	}else {
		echo "burro";
	}
 
 
	if ($por3 == 0){
		$por3 = $num1 %2;
		echo "<br/>é divisivel por 2 </br>";
		echo "o valor é </br>" . $por3;
	}else {
		echo "burro";
	}

 
	}
	echo "quando o numero for divisivel por 10, 5 ou 2 ira aparaecer no final " . "o valor 0, se não for irá aparecer o reusultado da conta.</br>";
	valor (15,0,0,0);
 
 
?>