<?php

function dbConnect(){
	try{
		$db = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');
	}
	catch(Exception $e){
		die("Error: Can't connnect to database");
	}

	return $db;
}

function getPosts(){

	$db = dbConnect();

	$posts = $db->query('SELECT id, author, title, content, category,DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date FROM posts ORDER BY creation_date DESC LIMIT 0,10');

	return $posts;
}

function getPost($id){
	$db = dbConnect();

	$post = $db->prepare('SELECT id, author, title, content,DATE_FORMAT(creation_date, \'%d/%m/%Y at %Hh-%imin-%ss\') AS creation_date FROM posts WHERE id=?');
	$post->execute(array($id));

	return $post;
}

function getComments($id){

	$db = dbConnect();

	$comment = $db->prepare('SELECT id_post, author, content, DATE_FORMAT(creation_date, \'%d/%m/%Y at %Hh-%imin-%ss\') AS creation_date FROM comments WHERE id_post=? ORDER BY creation_date DESC');
	$comment->execute(array($id));

	return $comment;
}

function addComment($id, $author, $content){
	$db = dbConnect();

	$postedComment = $db->prepare('INSERT INTO comments(id_post, author, content, creation_date) VALUES(?, ?, ?, NOW())');
	$postedComment->execute(array($id, $author, $content));
}

function addPost($author, $content, $title){
	$db = dbConnect();

	$post = $db->prepare('INSERT INTO posts(author, content, title, creation_date) VALUES(?, ?, ?, NOW())');
	$post->execute(array($author, $content, $title));
}

function addUser($familyName, $firstName, $UserName, $email, $password){
	$db = dbConnect();

	$user = $db->prepare('INSERT INTO users(familyName, firstName, UserName, email, password, signUpDate) VALUES(?, ?, ?, ?, ?,NOW())');
	$user->execute(array($familyName, $firstName, $UserName, $email, $password));
}

function login(){

}
