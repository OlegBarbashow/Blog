<?php
class C_ArticleNew extends C_Base{
	function __construct(){
		
	}
	
	protected function OnInput(){
		parent::OnInput();
		$mArticles = M_Articles::getInstance();;
		$this->title = $this->title . 'Новая статья';
		if($this->isPost()){		
			$title = $_POST['title'];
			$content = $_POST['content'];
			
			if($mArticles->add($title, $content)){
				header('Location: index.php?c=editor');
				die();
			}
		}
	}
	
	protected function OnOutput(){
		$this->content = $this->Template('v/v_new.php');
		parent::OnOutput();
	}
}