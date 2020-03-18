<?php

class Test extends _MainModel{
	public $text = ["one", "two", "three"];
	
    
    public function getText(){
        
        _MainModel::viewJSON($this->text);
    }
    public function getTable(){
    	_MainModel::viewJSON(_MainModel::table("users_person_data")->get()->send());
    }
    public function addRow(){
    	_MainModel::table("users_person_data")->add(array("citizenship" => $_GET["cit"], "password" => $_GET["pass"], "phone" => $_GET["ph"], "name" => $_GET["name"],"surname" => $_GET["sur"], "partonymic" => $_GET["part"], "date_of_birth" => $_GET["date"], "gender" => $_GET["gender"]))->send();
    	echo 'Row created!'; 
    	
    	
    }
    public function editRow(){

    	$id = $_GET["id"];
    	if(!empty($_GET["cit"])){
    		_MainModel::table("users_person_data")->edit(array("citizenship" => $_GET["cit"]), array("id" => $id))->send();
    	}
    	if(!empty($_GET["pass"])){
    		_MainModel::table("users_person_data")->edit(array("password" => $_GET["pass"]), array("id" => $id))->send();
    	}
    	if(!empty($_GET["ph"])){
    		_MainModel::table("users_person_data")->edit(array("phone" => $_GET["ph"]), array("id" => $id))->send();
    	}
    	if(!empty($_GET["name"])){
    		_MainModel::table("users_person_data")->edit(array("name" => $_GET["name"]), array("id" => $id))->send();
    	}
    	if(!empty($_GET["sur"])){
    		_MainModel::table("users_person_data")->edit(array("surname" => $_GET["sur"]), array("id" => $id))->send();
    	}
    	if(!empty($_GET["part"])){
    		_MainModel::table("users_person_data")->edit(array("partonymic" => $_GET["part"]), array("id" => $id))->send();
    	}
    	if(!empty($_GET["date"])){
    		_MainModel::table("users_person_data")->edit(array("date_of_birth" => $_GET["date"]), array("id" => $id))->send();
    	}
    	if(!empty($_GET["gender"])){
    		_MainModel::table("users_person_data")->edit(array("gender" => $_GET["gender"]), array("id" => $id))->send();
    	}
    	
    	echo 'Row edited!';
    	
    }
    public function deleteRow(){
    	_MainModel::table("users_person_data")->delete(array("id" => $_GET["id"]))->send();
    	echo 'Row deleted!';
    	
    }

}


?>
