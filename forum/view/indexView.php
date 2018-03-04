<?php

ob_start();

$title = 'LinuxAsk';

?>
		<form action="index.php?page=addPost" method="post">
			<p id="form">
				<label for="title">Title: </label>
				<input type="text" name="title" id="title"/></br>

				<label for="author">Author: </label>
				<input type="text" name="author" id="author"/></br>

				<label for="content">Content: </label>
				<textarea name="content" id="content"></textarea>
				<input type="submit" value="Envoyer">
			</p>
		</form>
<?php
while($data = $posts->fetch()){
?>
	<div id='post'>
		<h2 id='postTitle'><a class="postLink" href="index.php?page=post&id=<?= $data['id'] ?>"><?= htmlspecialchars($data['title']) ?></a></h2>
		<p id='content'><?= htmlspecialchars($data['content']) ?><br/>
			<span>by <?= $data['author'] ?></span><br/>
			<em><?= $data['creation_date']?></em></p>
	</div>
<?php
}

$content = ob_get_clean();

$posts->closeCursor();
require('template.php');
?>