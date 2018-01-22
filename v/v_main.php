<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title;?></title>
		<link href="v/style.css" rel="stylesheet">
	</head>
	<body>
		<img src="v/wg.png" width="238" height="73" alt="Logotype">
		<br>
		<a href="index.php">Главная</a></b> | 
		<a href="index.php?c=editor">Консоль редактора</a>
		<hr>
		
			<?php echo $content;?>
			
		<hr>
	</body>
</html>