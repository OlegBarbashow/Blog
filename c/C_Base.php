<?php
include_once('c/Controller.php');
include_once('m/startup.php');
include_once('m/model.php');

abstract class C_Base extends Controller{
	protected $title; 		// page title
	protected $content;		// page content
	
	function __construct(){
		
	}
	
	protected function OnInput(){
		startup();
		$this->title = '';
	}
	
	protected function OnOutput(){
		$page = $this->Template('v/v_main.php', 
						array('content'=>$this->content, 'title'=>$this->title));
						
		header('Content-Type: text/html; charset=utf-8');
		echo $page;
	}
}