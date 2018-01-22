<?php
	include_once('startup.php');
	include_once('model.php');
	include_once('view.php');
	
	// Установка параметров, подключение к БД, запуск сессии
	startup();
	
	// Извлечение статей
	$articles = articles_all();
	
	// Заголовок страницы
	$title = 'Консоль редактора';
	
	$content = view_include('theme/v_editor.php', array('articles'=>$articles));
	
	$page = view_include('theme/v_main.php', array('content'=>$content,
												   'title'=>$title));
	
	// Кодировка
	header('Content-Type: text/html; charset=utf-8');
	
	echo $page;