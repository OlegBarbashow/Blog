<?php
class C_ArticleList extends C_Base{
	protected $articles;
	
	function __construct(){
		
	}
	
	protected function OnInput(){
		parent::OnInput();
		$mArticles = M_Articles::getInstance();
		$this->title = $this->title . 'Главная';
		
		$this->articles = $mArticles->all();
		for($i = 0; $i < count($this->articles); $i++){
			$this->articles[$i]['intro'] = $mArticles->intro($this->articles[$i]);
		}
	}
	
	protected function OnOutput(){
		$vars = array('articles'=>$this->articles);
		$this->content = $this->Template('v/v_index.php', $vars);
		parent::OnOutput();
	}
}