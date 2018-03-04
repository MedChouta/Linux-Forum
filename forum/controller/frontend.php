<?php 

require('model/frontend.php');


function listPosts(){

	$posts = getPosts();

	require ('view/indexView.php');
}

function showPost($id){

	$post = getPost($id);
	$comments = getComments($id);

	require('view/postView.php');
}

function postComment($id, $author, $content){

	addComment($id, $author, $content);

	header('Location: index.php?page=post&id=' . $id);

}

function post($author, $content, $title){

	addPost($author, $content, $title);

	header('Location: index.php?page=accueil');

}