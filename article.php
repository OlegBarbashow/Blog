<?php
	include_once('startup.php');
	include_once('model.php');
	
	startup();
	
	if(isset($_GET['id_article'])){
		$id_article = $_GET['id_article'];
		$article = articles_get($id_article);
	}
	else{
		die("Extracting article error!!!");
	}
	
	header('Content-Type: text/html; charset=utf-8');
	
	include_once('theme/article.php');