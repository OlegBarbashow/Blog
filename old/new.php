<?php
	include_once('startup.php');
	include_once('model.php');
	include_once('view.php');
	
	// Установка параметров
	startup();
	
	// Обработка отправки формы
	if(!empty($_POST)){
		
		$title = $_POST['title'];
		$content = $_POST['content'];
		
		if(articles_new($title, $content)){
			header('Location: editor.php');
			die();
		}
	}
	
	$title = 'Новая статья';
	
	$content = view_include('theme/v_new.php');
	
	$page = view_include('theme/v_main.php', array('title'=>$title,
												   'content'=>$content));
		
	// Кодировка
	header('Content-Type: text/html; charset=utf-8');
	
	// Вывод в шаблон
	echo $page;