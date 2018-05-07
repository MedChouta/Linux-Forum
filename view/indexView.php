<?php

ob_start();

$title = 'LinuxAsk';


?>

<div id="post-list">
	<table>
		<tr class="head">
			<th align="left" class="topic">Sujet</th>
			<th align="left" class="category">Catégorie</th>
			<th align="left" class="user">Utilisateur</th>
			<th align="left" class="date">Date</th>
		</tr>

<?php
while($data = $posts->fetch()){
?>
		<tr class="content">
			<td class="topic"><a class="postLink" href="index.php?page=post&id=<?= $data['id'] ?>"><?= htmlspecialchars($data['title']) ?></a></td>
			<td class="category"><?= htmlspecialchars($data['category']) ?></td>
			<td class="user">User</td>
			<td class="date"><?= htmlspecialchars($data['creation_date']) ?></td>
		</tr>
<?php
}
?>
	</table>
</div>
<?php
$content = ob_get_clean();

$posts->closeCursor();
require('template.php');
?>