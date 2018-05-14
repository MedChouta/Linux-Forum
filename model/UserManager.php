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

	public function login($email, $password){

		$db = $this->dbConnect();

		$saltedPassword = new Credentials();
		$password = $saltedPassword->saltHash($password);

		$user = $db->prepare('SELECT email, password, UserName FROM users WHERE email=? AND password=?');
		$user->execute(array($email, $password));

		$data = $user->fetch();

		setcookie('userName', $data['UserName'], time()+3600*24*365, null, null, false, true);
	}

	public function logout(){
		setcookie('userName', $data['UserName'], 0, null, null, false, true);
	}

}