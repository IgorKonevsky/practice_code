<?php

class Authorization extends _MainModel{

	function register(){
		
 		
 		
 		$arr = array(
 			"name" => $_POST["name"],
            "login" => $_POST["login"],
            "status" => "I",
 			"password" => password_hash($_POST["password"], PASSWORD_DEFAULT)  
 		);
 		
    	if(isset($_POST["sign_up"])){
    		foreach ($arr as $key => $value) {
 				if($value == null){
 					echo "<b>input error, $key is missing!</b> </br>";
 					$error = 1;
 				}
 			
 				
 			}
    		if(!$error){
                if(_MainModel::table("users_person_data")->get(array("login"))->filter(array("login" => $arr["login"]))->send() == null){
    			    _MainModel::table("users_person_data")->add($arr)->send();

                   
    			    echo 'registration completed!'; 

                }
                else echo 'such login already exists';
                
    		}

    	}

	}

	function auth(){
		

		
        $result = _MainModel::table("users_tokens")->get()->filter(array("session_key" => $_COOKIE["session_key"]))->send();
        if($result[0] != null){
            _MainModel::viewJSON($_COOKIE["session_key"]);
            _MainModel::table("users_person_data")->edit(array("status" => "A"), array("id" => $result[0]["user_id"]))->send();        
        }
        else{

 		$arr = array(
 			"login" => $_POST["login"],
 			"password" => $_POST["password"]
 		);


 		if(isset($_POST["sign_in"])){
    		foreach ($arr as $key => $value) {
 				if($value == null){
 					echo "<b>input error, $key is missing!</b> </br>";
 					$error = 1;
 				}}

 		if(!$error){
                
    			
                $result = _MainModel::table("users_person_data")->get(array("password"))->filter(array("login" => $arr["login"]))->send();
                $pass = $result[0]["password"];
                
                if(password_verify($arr["password"], $pass)){

                    $result = _MainModel::table("users_person_data")->get()->filter(array("login" => $arr["login"]))->send();

                    $session_key = bin2hex(random_bytes(10));

                    _MainModel::table("users_tokens")->add(array("session_key" => $session_key, "user_id" => $result[0]["id"]))->send();
                    _MainModel::table("users_person_data")->edit(array("status" => "A"), array("id" => $result[0]["id"]))->send(); 

                    setcookie("session_key", $session_key, time()+1000, "/");
                    
                    _MainModel::viewJSON($_COOKIE["session_key"]);
                   

                    
                }
                else echo "password is incorrect";
                
    			

    			
		}
    			
 
        
    	}
    }
    		

			


	
}
	



}



?>