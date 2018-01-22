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
