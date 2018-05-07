<?php 

require('model/Manager.php');
require('model/PostManager.php');
require('model/CommentManager.php');
require('model/UserManager.php');


function listPosts(){

	$posts = new PostManager();
	$posts = $posts->getPosts();

	require ('view/indexView.php');
}

function showPost($id){

	$post = new PostManager();
	$post = $post->getPost($id);

	$comments = new CommentManager();
	$comments = $comments->getComments($id);

	require('view/postView.php');
}

function postComment($id, $author, $content){

	$comments = new CommentManager();
	$comments = $comments->addComment($id, $author, $content);

	header('Location: index.php?page=post&id=' . $id);

}

function post($author, $content, $title){

	$post = new PostManager();
	$post->addPost($author, $content, $title);

	header('Location: index.php?page=accueil');

}

function signUp($UserName, $email, $password){
	$user = new UserManager();
	$user->add($UserName, $email, $password);

	header('Location: index.php?page=accueil');
}

function showForm(){
	require('view/ask.php');
}