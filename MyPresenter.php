<?php

class MyPresenter extends _MainPresenter{
    public $text = array(
        "one" => 1,
        "two" => 2,
        "three" => 3,
        
    );
    
     public function getText(){
        echo json_encode($this->text);
    }
    
}






?>