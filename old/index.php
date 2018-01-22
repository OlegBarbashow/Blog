<?php
	include_once('startup.php');
	include_once('model.php');
	include_once('view.php');
	
	// Стартовые установки 
	startup();
	
	// Информация для отображения
	$title = 'Главная';
	
	// Получаем все статьи
	$articles = articles_all();
	
	// Получаем краткое описание
	for($i = 0; $i < count($articles); $i++){
		$articles[$i]['intro'] = articles_intro($articles[$i]);
	}
	
	// Внутренний шаблон
	$content = view_include('theme/v_index.php', array('articles'=>$articles));
	
	// Внешний шаблон
	$page = view_include('theme/v_main.php', 
						array('content'=>$content, 'title'=>$title));
	
	header('Content-Type: text/html; charset=utf-8');
	
	// Вывод
	echo $page;