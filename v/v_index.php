<?php
	if(!$articles){
		echo "Статтей нет!!!";
	}else{
		foreach($articles as $article):?>
		<p>
		<a href="index.php?c=article&id_article=<?php echo $article['id_article'];?>">
		<?php echo $article['title'];?></a>
		<br>
		<?php echo $article['intro'];?>
		</p>
		<?php endforeach;
	}
	