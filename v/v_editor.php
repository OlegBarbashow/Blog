<ul>
	<li>
		<b><a href="index.php?c=new">Новая статья</a></b>
	</li>
	<?php foreach($articles as $article):?>
	<li>
		<a href="index.php?c=edit&id_article=<?php echo $article['id_article'];?>">
			<?php echo $article['title'];?>
		</a>
	</li>
	<?php endforeach;?>
</ul>
