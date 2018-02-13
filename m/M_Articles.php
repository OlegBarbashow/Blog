<?php
class M_Articles{
	private static $instance;
	
	public function __construct(){
		
	}
	
	//
	//	Singleton
	//
	public static function getInstance(){
		if(self::$instance === null){
			self::$instance = new M_Articles();
		}
		return self::$instance;
	}
	
	//
	//	List of all articles
	//
	public function all(){
		//request
		$query = "SELECT * FROM articles ORDER BY id_article DESC";
		$result = mysql_query($query);
		if(!$result){
			die(mysql_error());
		}
		
		//	extraction from database
		$n = mysql_num_rows($result);
		$articles = array();
		for($i = 0; $i < $n; $i++){
			$row = mysql_fetch_assoc($result);
			$articles[] = $row;
		}
		return $articles;
	}

	//
	//	Specific article
	//
	public function get($id_article){
		//	request
		$t = "SELECT * FROM articles WHERE id_article='%d'";
		$query = sprintf($t, $id_article);
		$result = mysql_query($query);
		if(!$result){
			die(mysql_error());
		}
		
		//	extraction from database
		$article = mysql_fetch_assoc($result);
		return $article;
	}

	//
	//	Add article
	//
	public function add($title, $content){
		//	preparation
		$title = trim($title);
		$content = trim($content);
		
		//	test
		if($title == ''){
			return false;
		}
		
		//	request
		$t = "INSERT INTO articles(title, content) VALUE('%s', '%s')";
		
		$query = sprintf($t,
						 mysql_real_escape_string($title),
						 mysql_real_escape_string($content));
							 
		$result = mysql_query($query);
		
		if(!$result){
			die(mysql_error());
		}
		
		return true;
	}

	//
	//	Edit article
	//
	public function edit($id_article, $title, $content){
		// request
		$t = "UPDATE articles SET title='%s', content='%s' WHERE id_article='%d'";
		$query = sprintf($t,
						 mysql_real_escape_string($title),
						 mysql_real_escape_string($content),
						 $id_article);
		$result = mysql_query($query);
		
		if(!$query){
			die(mysql_error());
		}
		
		return true;
	}

	//
	//	Delete article
	//
	public function delete($id_article){
		//	request
		$t = "DELETE FROM articles WHERE id_article='%d'";
		$query = sprintf($t, $id_article);
		$result = mysql_query($query);

		if(!$result){
			die(mysql_error());
		}
		
		return true;
	}
	
	//
	//	Short description of the article 
	//
	public function intro($article){
		$max_length = 100;
		$length = mb_strlen($article['content']);
		
		if($length > $max_length){
			$intro = mb_substr($article['content'], 0, 100, 'UTF-8') . '...';
		}
		else{
			$intro = $article['content'];
		}
		
		return $intro;
	}
}