<div class="background-modal" onclick="fadeOut(this,modalContainer[1])">
	<div class="modal-container">
		<h2 class="title">Inscription</h2>
		<form method="post" action="index.php?page=signIn">
			<p class="input">
				<label for="email">Email: </label>
				<input type="email" name="email">
			</p>

			<p class="input">
				<label for="password">Mot de passe: </label>
				<input type="password" name="password">
			</p>
		</form>
		<button class="submit info-button" type="submit" form="form">Connexion</button>
	</div>
</div>