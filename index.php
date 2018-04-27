<?php

require('controller/frontend.php');


try
{
	if(isset($_GET['page'])){
		if($_GET['page'] == 'accueil'){
			listPosts();
		}
		elseif($_GET['page'] == 'addPost'){
			if(!empty($_POST['author']) AND !empty($_POST['content']) AND !empty($_POST['title'])){
				post($_POST['author'], $_POST['content'], $_POST['title']);
			}
			else{
				throw new Exception('You need to fill all the inputs');
			}
		}
		elseif(isset($_GET['id']) AND $_GET['id'] > 0){

			if($_GET['page'] == 'post'){
				showPost($_GET['id']);
			}

			elseif($_GET['page'] == 'addComment'){
				if(!empty($_POST['author']) AND !empty($_POST['content'])){
					postComment($_GET['id'], $_POST['author'], $_POST['content']);
				}
				else{
					throw new Exception('You need to fill all the inputs');
				}
			}
		}
		else{
			throw new Exception('Invalid arguments');
		}
	}
}
catch(Exception $e){
	echo 'Error: '. $e->getMessage();
}