<?php
include_once('dbconfig.php');

function startup(){
	// Language settings
	setlocale(LC_ALL, 'ru-RU');
	date_default_timezone_set('Europe/Kiev');
	
	// Connection to the database
	$link = mysql_connect(DB_HOST, DB_LOGIN, DB_PASSWORD) or die('No connection with data base');
	mysql_set_charset('charset=utf8', $link);
	mysql_select_db(DB_NAME, $link) or die('No data base');
	
	// open session
	//session_start();
}