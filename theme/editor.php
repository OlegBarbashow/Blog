<!DOCTYPE html>
<html lang='ru'>
	<head>
		<meta charset="UTF-8">
		<title>Web-guru</title>
		<link rel="stylesheet" href="theme/style.css">			    
	</head>
	<body>
		<img src="theme/wg.png" width="238" height="73" alt="Logotype">
		<br>
		<a href="index.php">Главная</a> | 
		<b>Консоль редактора</b>
		<hr>
		<ul>
			<li>
				<b><a href="new.php">Новая статья</a></b>
			</li>
			<?php foreach($articles as $article):?>
			<li>
				<a href="edit.php?id_article=<?php echo $article['id_article'];?>">
					<?php echo $article['title'];?>
				</a>
			</li>
			<?php endforeach;?>
		</ul>
		<hr>
	</body>
</html> 