<?php	
	function __autoload($className){
		include_once('c/' . $className . '.php');
	}
	
	switch($_GET['c']){
		case 'article':
			$controller = new C_Article();
			break;
		case 'editor':
			$controller = new C_Editor();
			break;
		case 'new':
			$controller = new C_New();
			break;
		case 'edit':
			$controller = new C_Edit();
			break;
		default:
			$controller = new C_View();
	}
	
	$controller->Request();