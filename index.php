<?php
	include_once('startup.php');
	include_once('model.php');
	
	startup();
	
	$articles = articles_all();
	
	for($i = 0; $i < count($articles); $i++){
		$articles[$i]['intro'] = articles_intro($articles[$i]);
	}
	
	header('Content-Type: text/html; charset=utf-8');
	
	include_once('theme/index.php');