<?php
if(isset($_COOKIE['userName'])){

ob_start();

$title = 'LinuxAsk-Ask';


?>
<h2 id="ask">Poser une question:</h2>
<form id="form" method="post" action="index.php?page=addPost" class="form">
	<p>
		<label for="title" id="title">Titre: </label>
		<input id="title" type="text" name="title">
	</p>
	<textarea name="content" placeholder="contenu..." cols="80" rows="10"></textarea>
	<p>
		<label id="title">Catégorie: </label>
		<select name="category">
			<option value="annonce">Annonce</option>
			<option value="dépanage">Dépanage</option>
			<option value="discution générale">Discution générale</option>
		</select>
	<p>
	<input type="submit">
</form>

<?php
$content = ob_get_clean();

require('template.php');

}
else{
	header('Location: index.php?page=accueil');
}
?>