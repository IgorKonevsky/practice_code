<?php
 
class Users extends _MainModel{


    public function getListUsers(){

        $result = _MainModel::table("users_cards")->get()->send();

        var_dump(self::check('id'));
        
        // if(self::check(self::$params_url['id'])){
        // 	echo 1;
        // }else{
        // 	echo 2;

        // }
        // if( array_key_exists("id", self::$params_url) ){
        // 	// if( self::$params_url['id'] != ''){
        // 	var_dump("есть");
        // }else{
        // 	var_dump("пусто");
        // }
        
        _MainModel::viewJSON($result);  
    }

}

?>