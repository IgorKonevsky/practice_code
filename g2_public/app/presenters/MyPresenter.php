<?php

class MyPresenter extends _MainPresenter{
    
    
     public function getText(){
        echo (new Test())->getText();
    }
    public function getTable(){
    	echo (new Test())->getTable();
    }
    public function addRow(){
    	(new Test())->addRow();
    }
    public function editRow(){
    	(new Test())->editRow();
    }
    public function deleteRow(){
    	(new Test())->deleteRow();
    }
}


?>