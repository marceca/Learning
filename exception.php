<?php

$name = "e";
$email = "";

class nameException extends Exception{
	
	public function nameErrorMessage(){
		echo "Error on line ".$this->getLine()." in ".$this->getFile();		
	}	
}

class emailException extends Exception{
	public function emailErrorMessage(){
		echo "Error on line ".$this->getLine()." in ".$this->getFile();		
	}	
}


try{
	if($name==""){
		throw new nameException();
	}elseif($email==""){
		throw new emailException();
	}else{
		echo "cool";
	}
	
}


catch(nameException $error){
	echo $error->nameErrorMessage();	
}

catch(emailException $error){
	echo $error->emailErrorMessage();
}
?>