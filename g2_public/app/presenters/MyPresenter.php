<?php

class MyPresenter extends _MainPresenter{
    
    
     public function getText(){
        echo (new Test())->getText();
    }
    
}


?>