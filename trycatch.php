<?php

$num = 10;

try{
	if($num > 15){
		echo "number is greater then 15";
	}else{
		throw new Exception('number is less then 15');
	}
}

catch(Exception $error){
	echo	"Error: ".$error->getMessage();
}


?>