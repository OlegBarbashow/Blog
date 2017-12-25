<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Web guru</title>
		<link href="theme/style.css" rel="stylesheet">
	</head>
	<body>
		<img src="theme/wg.png" width="238" height="73" alt="Logotype">
		<br>
		<b>Главная</b> | 
		<a href="editor.php">Консоль редактора</a>
		<hr>
		
			<?php foreach($articles as $article):?>
				<p>
					<a href="article.php?id_article=<?php echo $article['id_article'];?>">
					<?php echo $article['title'];?></a>
					<br>
					<?php echo $article['intro'];?>
				</p>
			<?php endforeach;?>
		
	</body>
</html>