<?php

class MyPresenter extends _MainPresenter{
    public $text = ["one", "two", "three"];
    
     public function getText(){
        echo json_encode($this->text);
    }
    
}






?>