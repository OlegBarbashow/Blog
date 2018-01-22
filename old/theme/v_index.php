<?php foreach($articles as $article):?>
	<p>
		<a href="article.php?id_article=<?php echo $article['id_article'];?>">
		<?php echo $article['title'];?></a>
		<br>
		<?php echo $article['intro'];?>
	</p>
<?php endforeach;?>