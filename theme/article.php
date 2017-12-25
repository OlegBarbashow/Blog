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
		<a href="editor.php">Консоль редактора</a>
		<hr>
		<h1>
			<?php echo $article['title'];?>
		</h1>
		<p>
			<?php echo $article['content'];?>
		</p>
		<hr>
	</body>
</html>  