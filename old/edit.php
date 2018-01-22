<?php
	include_once('startup.php');
	include_once('model.php');
	include_once('view.php');
	
	startup();
	
	if(!empty($_POST)){
		$requestButton = $_POST['requestButton'];
		$id_article = $_POST['id_article'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		
		if($requestButton == 'save' && articles_edit($id_article, $title, $content)){
			header('Location: editor.php');
			die();
		}
		elseif($requestButton == 'delete' && articles_delete($id_article)){
			header('Location: editor.php');
			die();
		}
		else{
			die('Request error');
		}
	}
	else{
		$id_article = $_GET['id_article'];
		$article = articles_get($id_article);
	}

	$title = 'Редактированние';
	$content = view_include('theme/v_edit.php', array('article'=>$article));
	
	
	$page = view_include('theme/v_main.php', array('content'=>$content,
												   'title'=>$title));
	header('Content-type: text/html; charset=utf-8');
	
	echo $page;