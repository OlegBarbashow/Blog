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
	<input type="hidden" name="id_article" value = "<?php echo $article['id_article'];?>">
	<button type="submit" name="requestButton" value="save">Сохранить</button>
	<button type="submit" name="requestButton" value="delete">Удалить</button>
</form>
	