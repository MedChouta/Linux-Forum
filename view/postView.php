<!DOCTYPE html>
<html>
	<head>
		<title>LinuxAsk</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="public/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	</head>
	<body>
		<div id='post'>
			<?php $data = $post->fetch() ?>
			<h2 id='postTitle'><?= htmlspecialchars($data['title']) ?></h2>
			<p id='content'><?= htmlspecialchars($data['content']) ?><br/>
				<span>by <?= $data['author'] ?></span><br/>
				<em><?= $data['creation_date']?></em></p>
		</div>

		<form action="index.php?page=addComment&id=<?= $_GET['id'] ?>" method="post">
			<p id="form">
				<label for="author">Author: </label>
				<input type="text" name="author"/></br>

				<label for="content">Content: </label>
				<textarea name="content"></textarea>

				<input type="submit" value="Envoyer">
			</p>
		</form>

	<?php while($data = $comments->fetch()){ ?>

		<div id='comment'>
			<h2><?= htmlspecialchars($data['author']) ?></h2> <em><?= $data['creation_date']?></em>
			<p><?= htmlspecialchars($data['content']) ?></p>
		</div>

	<?php
	}
		$post->closeCursor();
	?>

	</body>
</html>