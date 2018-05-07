<!DOCTYPE html>
<html>
	<head>
		<title>LinuxAsk</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="public/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	</head>
	<body>
		<?php 			
			include('view/signInModal.php');
			include('view/signUpModal.php');
			include('view/header.php');
		 ?>
		 <div id="postView">
			<div id='post'>
				<?php $data = $post->fetch() ?>
				<h2 id='postTitle'><?= htmlspecialchars($data['title']) ?></h2>
				<div class="blockPost">
					<h3><?= $data['author']."<em> OP</em>" ?></h3>
					<p id='content'><?= htmlspecialchars($data['content']) ?><br/>
					<em><?= $data['creation_date']?></em></p>
				</div>
			</div>

	<?php while($data = $comments->fetch()){ ?>

		<div id='comment' class="blockPost">
			<h3><?= htmlspecialchars($data['author']) ?></h3> <em><?= $data['creation_date']?></em>
			<p><?= htmlspecialchars($data['content']) ?></p>
		</div>

	<?php
	}
	?>	
			<form action="index.php?page=addComment&id=<?= $_GET['id'] ?>" method="post">
				<p id="form">
					<textarea name="content" cols="70" rows="10" placeholder="Commentaire..."></textarea><br/>

					<input class="info-button" id="commentButton" type="submit" value="Envoyer">
				</p>
			</form>
		</div>

	<?php
		$post->closeCursor();
	?>

	</body>
</html>