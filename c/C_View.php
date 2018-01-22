<?php
include_once('c/C_Base.php');

class C_View extends C_Base{
	protected $articles;
	
	function __construct(){
		
	}
	
	protected function OnInput(){
		parent::OnInput();
		$this->title = $this->title . 'Главная';
		$this->articles = articles_all();
		for($i = 0; $i < count($this->articles); $i++){
			$this->articles[$i]['intro'] = articles_intro($this->articles[$i]);
		}
	}
	
	protected function OnOutput(){
		$vars = array('articles'=>$this->articles);
		$this->content = $this->Template('v/v_index.php', $vars);
		parent::OnOutput();
	}
}