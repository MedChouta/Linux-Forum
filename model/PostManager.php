<?php 

class PostManager extends Manager{
	
	public function getPosts(){

		$db = $this->dbConnect();

		$posts = $db->query('SELECT id, author, title, content, category,DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date FROM posts ORDER BY creation_date DESC LIMIT 0,10');

		return $posts;
	}

	public function getPost($id){
		$db = $this->dbConnect();

		$post = $db->prepare('SELECT id, author, title, content,DATE_FORMAT(creation_date, \'%d/%m/%Y at %Hh-%imin-%ss\') AS creation_date FROM posts WHERE id=?');
		$post->execute(array($id));

		return $post;
	}

	public function addPost($author, $content, $title){
		$db = $this->dbConnect();

		$post = $db->prepare('INSERT INTO posts(author, content, title, creation_date) VALUES(?, ?, ?, NOW())');
		$post->execute(array($author, $content, $title));
	}

}