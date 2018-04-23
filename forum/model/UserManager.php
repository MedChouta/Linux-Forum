<?php 

class Post extends Manager{
	
	public function addUser($familyName, $firstName, $UserName, $email, $password){
		$db = $this->dbConnect();

		$user = $db->prepare('INSERT INTO users(familyName, firstName, UserName, email, password, signUpDate) VALUES(?, ?, ?, ?, ?,NOW())');
		$user->execute(array($familyName, $firstName, $UserName, $email, $password));
	}
}