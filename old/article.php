<?php
	include_once('startup.php');
	include_once('model.php');
	include_once('view.php');
	
	startup();
	
	$title = 'Статья';
	
	if(isset($_GET['id_article'])){
		$id_article = $_GET['id_article'];
		$article = articles_get($id_article);
	}
	else{
		die("Extracting article error!!!");
	}
	
	$content = view_include('theme/v_article.php', array('article'=>$article));
	
	$page = view_include('theme/v_main.php', array('content'=>$content,
											 'title'=>$title));
	
	header('Content-Type: text/html; charset=utf-8');
	
	echo $page;