<?php

function checkAccName(){
	if(isset($_POST['createAccountForm'])){
	 	if(0>strlen($_POST['accName'])>41){
 			echo "erreur"; 			
 		}else{
 			echo "tout est ok";
	 	}
	}
}

function checkAccType(){
		$availableType = ['savings', 'checking', 'joint'];

 	if(isset($_POST['createAccountForm'])){

 		if(!in_array($_POST['accType'], $availableType)){
 			echo "erreur";
 			
 		}else{
 			echo "tout est ok";
 		}
 	}
 }

 function checkAccCurrency(){
 	$availableType = ['EUR', 'USD'];

 	if(isset($_POST['createAccountForm'])){

 		if(!in_array($_POST['accCurrency'], $availableType)){
 			echo "erreur";
 			
 		}else{
 			echo "tout est ok";
 		}
 	}
 }