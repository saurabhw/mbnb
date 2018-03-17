<?php



//returning false would indicate that the dom element should not be created

function checkIfLoginThenDoNotCreate(){
	if(isset($_SESSION['logged_in'])){
		if($_SESSION['logged_in'] == true){
			return false;
		}
		else{
			return true;
		}
	}
	else{
			return true;
		}
}


function checkIfNotLoginThenDoNotCreate(){
	if(isset($_SESSION['logged_in'])){
		if($_SESSION['logged_in'] == true){
			return true;
		}
		else{
			return false;
		}
	}
	else{
			return false;
		}	
}

function checkIfHostThenDoNotCreate(){
	if($_SESSION['host'] == '1'){
			return false;
		}
		else{
			return true;
		}
}


function checkIfMissionaryThenDoNotCreate(){
	if($_SESSION['missionary'] == '1'){
			return false;
		}
		else{
			return true;
		}
}


function checkIfNotHostThenDoNotCreate(){
	if($_SESSION['host'] == '0'){
			return false;
		}
		else{
			return true;
		}
}

function checkIfNotMissionaryThenDoNotCreate(){
	if($_SESSION['missionary'] == '0'){
			return false;
		}
		else{
			return true;
		}
}
?>
 