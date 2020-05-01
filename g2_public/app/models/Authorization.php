<?php

class Authorization extends _MainModel{

	function register(){
		
 		
 		
 		$arr = array(
 			"name" => $_POST["namename"],
 			"password" => $_POST["password"] 
 		);
 		
    	if(isset($_POST["sign_up"])){
    		foreach ($arr as $key => $value) {
 				if($value == null){
 					echo "<b>input error, $key is missing!</b> </br>";
 					$error = 1;
 				}
 			
 				
 			}
    		if(!$error){
    			_MainModel::table("users_person_data")->add($arr)->send();
    			echo 'registration completed!'; 


    		}

    	}
	}

	function auth(){
		
		

 		$arr = array(
 			"name" => $_POST["name"],
 			"password" => $_POST["password"] 
 		);

 		if(isset($_POST["log_in"])){
    		foreach ($arr as $key => $value) {
 				if($value == null){
 					echo "<b>input error, $key is missing!</b> </br>";
 					$error = 1;
 				}
 			}

 		if(!$error){
    			$result = _MainModel::table("users_person_data")->get()->filter(array("name" => $arr["name"], "password" => $arr["password"]))->send();
    			
    			if($result[0] != null){
    				setcookie('user', $arr["name"], time()+100, '/');
    				echo "welcome " . $arr["name"] . "</br>";
    				//_MainModel::viewJSON($result);
    				
    				
    			}
    			else {
    				echo "autorization failed";
    				
    			}

    			
		}
    			
 

    		}
    		if(isset($_POST["log_out"])){
    			setcookie('user', $arr["username"], time()-100, '/');

    		}

			


	}
	



}



?>