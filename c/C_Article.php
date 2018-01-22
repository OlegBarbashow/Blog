<?php
	include_once('c/C_Base.php');
	
	class C_Article extends C_Base{
		protected $article;
		function __construct(){
			
		}
		
		protected function OnInput(){
			parent::OnInput();
			$this->title = $this->title . 'Статья';
	
			if(isset($_GET['id_article'])){
				$id_article = $_GET['id_article'];
				$this->article = articles_get($id_article);
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