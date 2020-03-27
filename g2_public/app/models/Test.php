<?php

class Test extends _MainModel{
	public $text = ["one", "two", "three"];
	
    
    public function getText(){
        
        _MainModel::viewJSON($this->text);
    }
    
   

}


?>
