<?php 

require('model/Credentials.php');

class UserManager extends Manager{
	
	public function add($UserName, $email, $password){
		$db = $this->dbConnect();
		
		$saltedPassword = new Credentials();
		$password = $saltedPassword->saltHash($password);

		$user = $db->prepare('INSERT INTO users(UserName, email, password, signUpDate) VALUES(?, ?, ?,NOW())');
		$user->execute(array($UserName, $email, $password));
	}

}