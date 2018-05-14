<!DOCTYPE html>
<html>
	<head>
		<title><?= $title ?></title>
		<meta charset="utf-8" name="viewport" content="width=device-width">

		<link rel="stylesheet" href="public/css/style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono" rel="stylesheet">
	</head>
	
	<body>
		<?php  
			include('view/signInModal.php');
			include('view/signUpModal.php');
			include('view/header.php');

		?>
		<?= $content ?>
		
		<script src="public/js/formTransition.js">
		</script>
	</body>
</html>