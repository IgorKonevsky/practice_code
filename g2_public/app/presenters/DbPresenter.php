<?php

class DbPresenter extends _MainPresenter{

	public function addRow(){
    	(new User_data())->addRow();
    }
    public function editRow(){
    	(new User_data())->editRow();
    }
    public function deleteRow(){
    	(new User_data())->deleteRow();
    }	
}

?>