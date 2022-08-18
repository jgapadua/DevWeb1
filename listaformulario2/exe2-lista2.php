<?php
header("Content-type=text/html; charset=utf8");

$quantidade=$_POST["quantidade"];

$total= "R$"+0;


if($quantidade>=12){
	$total="R$"+0,25 * $quantidade;
}else{
	$total= "R$"+0,30 * $quantidade;
}
	
echo $total;



?>
