<?php 
error_reporting(0); 

class User_data extends _MainModel{
	 
 	public function addRow(){
 		
 		?>
 		
 		<html>
 		<body>
			<form  method="POST">
				<p>citizenship - <input type = "text" name = "citizenship" value = "<?php echo $_POST['citizenship'] ?>"></input></p>
				<p>password - <input type = "text" name = "password" value = "<?php echo $_POST['password'] ?>"></input></p>
				<p>phone - <input type = "text" name = "phone" value = "<?php echo $_POST['phone'] ?>"></input></p>
				<p>name - <input type = "text" name = "name" value = "<?php echo $_POST['name'] ?>"></input></p>
				<p>surname - <input type = "text" name = "surname" value = "<?php echo $_POST['surname'] ?>"></input></p>
				<p>partonymic - <input type = "text" name = "partonymic" value = "<?php echo $_POST['partonymic'] ?>"></input></p>
				<p>date_of_birth - <input type = "text" name = "date" value = "<?php echo $_POST['date'] ?>"></input></p>
				<p>gender - <input type = "text" name = "gender" value = "<?php echo $_POST['gender'] ?>"></input></p>
				<p><input type = "submit" name = "send" value = "send"></p>
			</form>

 		</body>
 		</html>

 		<?php
 		$arr = array(
 			"citizenship" => $_POST["citizenship"], 
 			"password" => $_POST["password"], 
 			"phone" => $_POST["phone"], 
 			"name" => $_POST["name"],
 			"surname" => $_POST["surname"], 
 			"partonymic" => $_POST["partonymic"], 
 			"date_of_birth" => $_POST["date"], 
 			"gender" => $_POST["gender"]
 		);
 		
    	if(isset($_POST["send"])){
    		foreach ($arr as $key => $value) {
 				if($value == null){
 					echo "<b>input error, $key is missing!</b> </br>";
 					$error = 1;
 				}
 			
 				
 			}
    		if(!$error){
    			_MainModel::table("users_person_data")->add($arr)->send();
    			echo 'Row created!'; 


    		}

    	}


    }
    
    public function editRow(){

    	?>
    	<html>
 		<body>
			<form  method="POST">
				<p>id - <input type = "text" name = "id" value = "<?php echo $_POST['id'] ?>"></input></p>
				<p>citizenship - <input type = "text" name = "citizenship" value = "<?php echo $_POST['citizenship'] ?>"></input></p>
				<p>password - <input type = "text" name = "password" value = "<?php echo $_POST['password'] ?>"></input></p>
				<p>phone - <input type = "text" name = "phone" value = "<?php echo $_POST['phone'] ?>"></input></p>
				<p>name - <input type = "text" name = "name" value = "<?php echo $_POST['name'] ?>"></input></p>
				<p>surname - <input type = "text" name = "surname" value = "<?php echo $_POST['surname'] ?>"></input></p>
				<p>partonymic - <input type = "text" name = "partonymic" value = "<?php echo $_POST['partonymic'] ?>"></input></p>
				<p>date of birth - <input type = "text" name = "date" value = "<?php echo $_POST['date'] ?>"></input></p>
				<p>gender - <input type = "text" name = "gender" value = "<?php echo $_POST['gender'] ?>"></input></p>
				<p><input type = "submit" name = "send" value = "send"></p>
			</form>

 		</body>
 		</html>

 		<?php

    	
    	
    	$arr = array(
    		"id" => $_POST["id"],
 			"citizenship" => $_POST["citizenship"], 
 			"password" => $_POST["password"], 
 			"phone" => $_POST["phone"], 
 			"name" => $_POST["name"],
 			"surname" => $_POST["surname"], 
 			"partonymic" => $_POST["partonymic"], 
 			"date_of_birth" => $_POST["date"], 
 			"gender" => $_POST["gender"]
 		);


 		

    	if(isset($_POST["send"])){
    		if($arr["id"] == null){
 				echo "<b>input error, id is missing!</b></br>";
 				$input_error = 1;
 			}
 			if(_MainModel::table("users_person_data")->get(array("id"))->filter(array("id" => $arr["id"]))->send() == null && !$input_error){
 				echo "<b>error, no row with such id!</b>";
 				$error = 1;

 			}
 			if(!$error && !$input_error){
 				if(!empty($_POST["citizenship"])){
    				_MainModel::table("users_person_data")->edit(array("citizenship" => $_POST["citizenship"]), array("id" => $_POST["id"]))->send();
    			}
		    	if(!empty($_POST["password"])){
		    		_MainModel::table("users_person_data")->edit(array("password" => $_POST["password"]), array("id" => $_POST["id"]))->send();
		    	}
		    	if(!empty($_POST["phone"])){
		    		_MainModel::table("users_person_data")->edit(array("phone" => $_POST["phone"]), array("id" => $_POST["id"]))->send();
		    	}
		    	if(!empty($_POST["name"])){
		    		_MainModel::table("users_person_data")->edit(array("name" => $_POST["name"]), array("id" => $_POST["id"]))->send();
		    	}
		    	if(!empty($_POST["surname"])){
		    		_MainModel::table("users_person_data")->edit(array("surname" => $_POST["surname"]), array("id" => $_POST["id"]))->send();
		    	}
		    	if(!empty($_POST["partonymic"])){
		    		_MainModel::table("users_person_data")->edit(array("partonymic" => $_POST["partonymic"]), array("id" => $_POST["id"]))->send();
		    	}
		    	if(!empty($_POST["date"])){
		    		_MainModel::table("users_person_data")->edit(array("date_of_birth" => $_POST["date"]), array("id" => $_POST["id"]))->send();
		    	}
		    	if(!empty($_POST["gender"])){
		    		_MainModel::table("users_person_data")->edit(array("gender" => $_POST["gender"]), array("id" => $_POST["id"]))->send();
		    	}
    			echo 'Row edited!'; 
 			}
    	}
    	
    }
    public function deleteRow(){
    	?>

    	<html>
 		<body>
			<form  method="POST">
				<p>id - <input type = "text" name = "id" value = "<?php echo $_POST['id'] ?>"></input></p>
				<p><input type = "submit" name = "send" value = "send"></p>
			</form>

 		</body>
 		</html>

 		<?php
 		
 		$id = $_POST["id"];

 		
 			
    	

    	
    	if(isset($_POST["send"])){
    		if($id == null){
 				echo "<b>input error, id is missing!</b></br>";
 				$input_error = 1;
 			}
 			if(_MainModel::table("users_person_data")->get(array("id"))->filter(array("id" => $id))->send() == null && !$input_error){
 				echo "<b>error, no row with such id!</b>";
 				$error = 1;

 			}
 			if(!$error && !$input_error){
 				_MainModel::table("users_person_data")->delete(array("id" => $_POST["id"]))->send();
    			echo 'Row deleted!'; 
    		}
    	}
    }
}
?>