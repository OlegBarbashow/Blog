 <!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Web guru</title>
		<link href="theme/style.css" rel="stylesheet">
	</head>
	<body>
		<img src="theme/wg.png" height="73" width="238" alt="Logotype" />
		<br>
		<a href="index.php">Главная</a> | 
		<a href="editor.php">Консоль редактора</a>
		<hr>
		<h1>Новая статья</h1>
		<form method="post" action="">
			Название:
			<br>
			<input type="text" name="title" value="<?php echo $article['title'];?>">
			<br>
			<br>
			Содержание:
			<br>
			<textarea name="content"><?php echo $article['content'];?></textarea>
			<br>
			<input type="hidden" name="id_article" value = "<?php echo $id_article;?>">
			<button type="submit" name="requestButton" value="save">Сохранить</button>
			<button type="submit" name="requestButton" value="delete">Удалить</button>
		</form>
	</body>
</html> 