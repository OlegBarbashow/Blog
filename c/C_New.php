<?php
	include_once('c/C_Base.php');
	
	class C_New extends C_Base{
		function __construct(){
			
		}
		
		protected function OnInput(){
			parent::OnInput();
			$this->title = $this->title . 'Новая статья';
			if($this->isPost()){		
				$title = $_POST['title'];
				$content = $_POST['content'];
				
				if(articles_new($title, $content)){
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