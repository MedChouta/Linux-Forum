<header>
	<nav class="navBar-container">
		<ul class="navBar">
			<li id="tux-li"><img id="tux_img" src="public/img/tux.png" alt="logo: tux"></li>
			<div class="sections">
				<li><a href="index.php?page=accueil">Accueil</a></li>
				<li>Blog</li>
				<li>Contact</li>
			</div>
		</ul>
	</nav>

	<div class="sign">
		<?php
		if(!isset($_COOKIE['userName'])){
		?>
		<p class="forum-name">AskTux:</p>
		<div>
			<button class="info-button signUp" onclick="fadeIn(modal[0], modalContainer[0])">Inscription</button>
			<button class="info-button signUp" onclick="fadeIn(modal[1], modalContainer[1])">Connexion</button>
		</div>
		<?php 
		}
		else{
		 ?>
		 <div class="User">
			 <img src="public/img/blankUser.png" alt="user" id="userPic"/>
			 <p><?php echo $_COOKIE['userName'] ?></p>
		</div>
		<div class="actions">
			<ul>
				<li><a href="index.php?page=ask">Poser une question</a></li>
				<li><a href="index.php?page=logout">Déconnexion</a></li>
			</ul>
		</div>
		<?php
		}
		?>
	</div>
</header>