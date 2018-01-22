<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title;?></title>
		<link href="theme/style.css" rel="stylesheet">
	</head>
	<body>
		<img src="theme/wg.png" width="238" height="73" alt="Logotype">
		<br>
		<a href="index.php">Главная</b> | 
		<a href="editor.php">Консоль редактора</a>
		<hr>
		
			<?php echo $content;?>
			
		<hr>
	</body>
</html>