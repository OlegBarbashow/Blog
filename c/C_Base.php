<?php
include_once('m/startup.php');

abstract class C_Base extends Controller{
	protected $title = ''; 		// page title
	protected $content = '';	// page content
	private $timeStart = 0;		// generation time
	protected $menuActive = '';	// select active menu
	
	function __construct(){
		
	}
	
	protected function OnInput(){
		$this->timeStart = microtime();
		startup();
		$this->title = 'Broadway: ';
	}
	
	protected function OnOutput(){
		$page = $this->Template('v/v_main.php', 
						array('content'=>$this->content, 'title'=>$this->title));
						
		header('Content-Type: text/html; charset=utf-8');
		echo $page;
		$timeEnd = microtime() - $this->timeStart;
		echo $timeEnd;
	}
}