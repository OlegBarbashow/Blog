<?php
	include_once('c/C_Base.php');

	class C_Editor extends C_Base{
		protected $articles;
		function __construct(){
			
		}
		
		protected function OnInput(){
			parent::OnInput();
			// Извлечение статей
			$this->title = $this->title .'Консоль редактора';
			$this->articles = articles_all();
		}
		
		protected function OnOutput(){
			$vars = array('articles'=>$this->articles);
			$this->content = $this->Template('v/v_editor.php', $vars);
			parent::OnOutput();
		}
	}