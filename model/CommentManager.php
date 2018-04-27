<?php

class CommentManager extends Manager{

	public function getComments($id){

		$db = $this->dbConnect();

		$comment = $db->prepare('SELECT id_post, author, content, DATE_FORMAT(creation_date, \'%d/%m/%Y at %Hh-%imin-%ss\') AS creation_date FROM comments WHERE id_post=? ORDER BY creation_date DESC');
		$comment->execute(array($id));

		return $comment;
	}

	public function addComment($id, $author, $content){
		$db = $this->dbConnect();

		$postedComment = $db->prepare('INSERT INTO comments(id_post, author, content, creation_date) VALUES(?, ?, ?, NOW())');
		$postedComment->execute(array($id, $author, $content));
	}
}