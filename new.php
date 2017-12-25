<?php
	include_once('startup.php');
	include_once('model.php');
	
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
		
	// Кодировка
	header('Content-Type: text/html; charset=utf-8');
	
	// Вывод в шаблон
	include_once('theme/new.php');