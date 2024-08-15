<?php 


	$num1 = 20.50;
	$num2 = 10.15;
	$resp = 0.0;

	$resp = $num1 + $num2;

	$resp++;

	if ($resp>=$num1) {
		
		echo "Resposta é $resp";
	}else {

		echo "Resposta é menor que o número 1";
	}

?>