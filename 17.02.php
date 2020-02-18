
<?php

class First_class{
	private $var="private variable";
	public $text="text1234";


	function text_output(){
		echo $this->text;
		echo "</br>";
	}
	
}

$obj1=new First_class();
$obj1->text_output();

class Human{
	protected $age;
	protected $height;
	protected $weight;

	function __construct($age,$height,$weight){
		$this->age=$age;
		$this->height=$height;
		$this->weight=$weight;
	}

	function info_output(){
		echo"</br>";
		$info=$this->age.$this->height.$this->weight;
		echo $info;
		

	}

}

$human1=new Human("20 ","170 ","60 ");
$human1->info_output();

class Worker extends Human{
	protected $experience;
	protected  $salary;

	function __construct($age,$height,$weight,$experience,$salary){
		parent::__construct($age,$height,$weight);
		$this->experience=$experience;
		$this->salary=$salary;
	}	
	function info_output(){
		echo"</br>";
		$info=parent::info_output();
		$info.=$this->experience.$this->salary;
		echo $info;
		

	}


}

$worker1=new Worker("30 ","180 ","80 ","10 "," 25000 ");
$worker1->info_output();

?>
