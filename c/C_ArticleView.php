<?php
class C_ArticleView extends C_Base{
	protected $article;
	function __construct(){
		
	}
	
	protected function OnInput(){
		parent::OnInput();
		$mArticles = M_Articles::getInstance();
		$this->title = $this->title . 'Статья';

		if(isset($_GET['id_article'])){
			$id_article = $_GET['id_article'];
			$this->article = $mArticles->get($id_article);
		}
		else{
			die("Extracting article error!!!");
		}
	}
	
	protected function OnOutput(){
		$vars = array('article'=>$this->article);
		$this->content = $this->Template('v/v_article.php', $vars);
		parent::OnOutput();
	}
}