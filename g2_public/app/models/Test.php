<?php

class Test extends _MainModel{
	public $text = ["one", "two", "three"];
	
    
    public function getText(){
        //echo json_encode($this->text);
        _MainModel::viewJSON($this->text);
    }
    public function getTable(){
    	_MainModel::viewJSON(_MainModel::table("users_person_data")->get()->send());
    }
    public function addRow(){
    	_MainModel::table("users_person_data")->add(array("id" => $_GET["id"], "citizenship" => $_GET["cit"], "password" => $_GET["pass"], "phone" => $_GET["ph"], "name" => $_GET["name"],"surname" => $_GET["sur"], "partonymic" => $_GET["part"], "date_of_birth" => $_GET["date"], "gender" => $_GET["gender"]))->send();
    	echo "Row created!";
    	
    	
    }
    public function editRow(){

    	//$arr=[$_GET["id"],$_GET["cit"],$_GET["pass"],$_GET["ph"],$_GET["name"],$_GET["sur"],$_GET["part"],$_GET["date"],$_GET["gender"]];
    	if(!empty($_GET["cit"])){
    		_MainModel::table("users_person_data")->edit(array("citizenship" => $_GET["cit"]), array("id" => $_GET["id"]))->send();
    	}
    	if(!empty($_GET["pass"])){
    		_MainModel::table("users_person_data")->edit(array("password" => $_GET["pass"]), array("id" => $_GET["id"]))->send();
    	}
    	if(!empty($_GET["ph"])){
    		_MainModel::table("users_person_data")->edit(array("phone" => $_GET["ph"]), array("id" => $_GET["id"]))->send();
    	}
    	if(!empty($_GET["name"])){
    		_MainModel::table("users_person_data")->edit(array("name" => $_GET["name"]), array("id" => $_GET["id"]))->send();
    	}
    	if(!empty($_GET["sur"])){
    		_MainModel::table("users_person_data")->edit(array("surname" => $_GET["sur"]), array("id" => $_GET["id"]))->send();
    	}
    	if(!empty($_GET["part"])){
    		_MainModel::table("users_person_data")->edit(array("partonymic" => $_GET["part"]), array("id" => $_GET["id"]))->send();
    	}
    	if(!empty($_GET["date"])){
    		_MainModel::table("users_person_data")->edit(array("date_of_birth" => $_GET["date"]), array("id" => $_GET["id"]))->send();
    	}
    	if(!empty($_GET["gender"])){
    		_MainModel::table("users_person_data")->edit(array("gender" => $_GET["genders"]), array("id" => $_GET["id"]))->send();
    	}
    	//_MainModel::table("users_person_data")->edit(array("citizenship" => "", "name" => "Igor"), array("id" => "1"))->send();
    	echo "Row edited!";
    	
    }
    public function deleteRow(){
    	_MainModel::table("users_person_data")->delete(array("id" => $_GET["id"]))->send();
    	echo "Row deleted!";
    	
    }

}


?>
