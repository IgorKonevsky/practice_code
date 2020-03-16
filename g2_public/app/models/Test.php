<?php

class Test extends _MainModel{
	public $text = ["one", "two", "three"];
    
    public function getText(){
        //echo json_encode($this->text);
        _MainModel::viewJSON($this->text);
    }

}


?>