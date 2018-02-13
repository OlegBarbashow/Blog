<?php
class C_ArticleEditor extends C_Base{
	protected $articles;
	function __construct(){
		
	}
	
	protected function OnInput(){
		parent::OnInput();
		$mArticles = M_Articles::getInstance();;
		// Извлечение статей
		$this->title = $this->title .'Консоль редактора';
		$this->articles = $mArticles->all();
	}
	
	protected function OnOutput(){
		$vars = array('articles'=>$this->articles);
		$this->content = $this->Template('v/v_editor.php', $vars);
		parent::OnOutput();
	}
}