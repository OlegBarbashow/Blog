<?php
abstract class Controller{
	function __construct(){
		
	}
	
	public function Request(){
		$this->OnInput();
		$this->OnOutput();
	}
	
	protected function OnInput(){
		
	}
	
	protected function OnOutput(){
		
	}
	
	protected function isPost(){
		return $_SERVER['REQUEST_METHOD'] == 'POST';
	}
	
	protected function isGet(){
		return $_SERVER['REQUEST_METHOD'] == 'GET';
	}
	
	protected function Template($fileName, $vars = array()){
		foreach($vars as $k=>$v){
			$$k = $v;
		}
		ob_start();
		include_once($fileName);
		return ob_get_clean();
	}
}