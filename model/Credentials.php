<?php

class Credentials{
	public function saltHash($password){
		$salt = 'dlkjlkjdglsjdfgkls@é$458695';
		$password = hash('sha512', $password.$salt);

		return $password;
	}
}