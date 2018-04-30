<?php 

class Manager{

	protected function dbConnect(){
		
		$db = new PDO('mysql:host=localhost;dbname=AskTux;charset=utf8', 'root', '');
		return $db;
	}
}