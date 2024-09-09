<?php 

	$num1 =1000;
	$num2 =5000;
	$num3 =10000;
	$troc =0;

	if ($num1 > $num2) {
		$troc = $num1;
        $num1 = $num2;
        $num2 = $troc;
	}

	else if ($num2 > $num3){
		$troc = $num2;
        $num2 = $num3;
        $num3 = $troc;
	}

echo "os numeros em ordem decrescente ficam </br>" . $num3 . " .. </br>" . $num2 . " .. </br>" . $num1;

 ?>