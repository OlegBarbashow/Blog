<?php	
	function __autoload($className){
		if(file_exists ('c/' . $className . '.php')){
			include_once('c/' . $className . '.php');
		}elseif(file_exists ('m/' . $className . '.php')){
			include_once('m/' . $className . '.php');
		}
		else{
			die('Unknown class!');
		}
	}
	
	switch($_GET['c']){
		case 'article':
			$controller = new C_ArticleView();
			break;
		case 'editor':
			$controller = new C_ArticleEditor();
			break;
		case 'new':
			$controller = new C_ArticleNew();
			break;
		case 'edit':
			$controller = new C_ArticleEdit();
			break;
		default:
			$controller = new C_ArticleList();
	}
	
	$controller->Request();