<!DOCTYPE html>
<html>
	<head>
		<title><?= $title ?></title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="public/css/style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	</head>
	
	<body>
		<?php  include('view/header.php'); ?>
		<?= $content ?>
	</body>
</html>