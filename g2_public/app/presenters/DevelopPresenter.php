<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 * branch b1
 */

class DevelopPresenter extends _MainPresenter {

	public function getTables(){

		// if($this->isSecurity()){
			echo (new Develop())->getTables();
		// } 

	}

}

?>