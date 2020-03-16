<?php
 
class UsersTokens {

    private static $user_id;

    public function isSecurity(){

        if( !empty($_COOKIE['security_key']) ) {
            
            $result = _MainModel::table("users_security_key")->get(array('id_user'))->filter(array('security_key' => $_COOKIE['security_key']))->send();
            
            if( !empty($result[0]['id_user']) ){
               
                self::$user_id = $result[0]['id_user'];
                return true;

            }else{
                header('Location: https://' . $_SERVER['SERVER_NAME']);
            }

        }else{
            header('Location: https://' . $_SERVER['SERVER_NAME']);
        }
    }

    public static function getID(){
        return self::$user_id;
    }

}

?>