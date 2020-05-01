<?php

class LoginPresenter extends _MainPresenter{

	public function register(){
    	(new Authorization())->register();
    }
    public function auth(){
    	(new Authorization())->auth();
    }
    
    

}

?>