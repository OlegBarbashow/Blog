<?php
class C_ArticleEdit extends C_Base{
	protected $article;
	function __construct(){
		
	}
	
	protected function OnInput(){
		parent::OnInput();
		$mArticles = M_Articles::getInstance();
		$this->title = $this->title . 'Редактированние';
		if($this->isPost()){
			$requestButton = $_POST['requestButton'];
			$id_article = $_POST['id_article'];
			$title = $_POST['title'];
			$content = $_POST['content'];
			
			if($requestButton === 'save' && $mArticles->edit($id_article, $title, $content)){
				header('Location: index.php?c=editor');
				die();
			}
			elseif($requestButton === 'delete' && $mArticles->delete($id_article)){
				header('Location: index.php?c=editor');
				die();
			}
			else{
				die('Request error');
			}
		}
		else{
			$id_article = $_GET['id_article'];
			$this->article = $mArticles->get($id_article);
		}		
	}
	
	protected function OnOutput(){
		$vars = array('article'=>$this->article);
		$this->content = $this->Template('v/v_edit.php', $vars);
		parent::OnOutput();
	}
}