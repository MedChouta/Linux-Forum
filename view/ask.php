<?php

ob_start();

$title = 'LinuxAsk-Ask';


?>
<h2 id="ask">Poser une question:</h2>
<form method="post" action="index.php?page=addPost" class="form">
	<p>
		<label for="title" id="title">Titre: </label>
		<input id="title" type="text" name="title">
	</p>
	<textarea name="content" placeholder="contenu..." cols="80" rows="10"></textarea>
</form>

<?php
$content = ob_get_clean();

require('template.php');
?>