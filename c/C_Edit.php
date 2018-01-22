<?php
	include_once('c/C_Base.php');
	
	class C_Edit extends C_Base{
		protected $article;
		function __construct(){
			
		}
		
		protected function OnInput(){
			parent::OnInput();
			$this->title = $this->title . 'Редактированние';
			if($this->isPost()){
				$requestButton = $_POST['requestButton'];
				$id_article = $_POST['id_article'];
				$title = $_POST['title'];
				$content = $_POST['content'];
				
				if($requestButton == 'save' && articles_edit($id_article, $title, $content)){
					header('Location: index.php?c=editor');
					die();
				}
				elseif($requestButton == 'delete' && articles_delete($id_article)){
					header('Location: index.php?c=editor');
					die();
				}
				else{
					die('Request error');
				}
			}
			else{
				$id_article = $_GET['id_article'];
				$this->article = articles_get($id_article);
			}		
		}
		
		protected function OnOutput(){
			$vars = array('article'=>$this->article);
			$this->content = $this->Template('v/v_edit.php', $vars);
			parent::OnOutput();
		}
	}