<?php

class Zakaz {
	private $tovar_name;
	private $countt;
	private $number_of_home;
	private $id_of_vk;
	
	#конструктор
	function __construct($t1, $t2, $t3, $t4) {
		$this->tovar_name = $t1;
		$this->countt = $t2;
		$this->number_of_home = $t3;
		$this->id_of_vk = $t4;
		
		echo $this->tovar_name."<br>";
	}
}


?>