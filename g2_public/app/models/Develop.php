<?php
 
class Develop extends _MainModel{

// SHOW COLUMNS FROM requests;
    public function getTables(){

        $sth = self::$db->prepare("SHOW TABLES");
        $sth->execute();

        //$result = _MainModel::table("users_cards")->get()->send();
        
        _MainModel::viewJSON($sth->fetchAll(\PDO::FETCH_ASSOC));  
    }

}

?>