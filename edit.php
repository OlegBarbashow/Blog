<?php
	//include_once('helpFiles/showError.php');
	include_once('startup.php');
	include_once('model.php');
	
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
	
	//header('Content-type: text/html; charset=utf-8');
	
	include_once('theme/edit.php');
	