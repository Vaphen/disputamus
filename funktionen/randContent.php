<?php

class RandArticle {
	private $randArticleHeading = "Leider steht keine &Uuml;berschrift zur Verf&uuml;gung"; // define articleheading in case of error
	private $randArticleTeaser = "Leider steht kein Teaser zur verf&uuml;gung."; // define teaser in case of error
	private $randArticleContent = "Leider steht kein Inhalt zur Verf&uuml;gung"; // define content in case of error
	
 	function __construct() {
 		require_once("dbvars.php"); // file includes mysql connection infos
		$connection = new mysqli(HOST, USER, PASSWORD, DATABASE);
		if($connection->connect_error){
			echo("Es konnte keine Verbindung zur Datenbank hergestellt werden.<br />");	
			return -1;
		}
		/* 
		 * count number of articles for random selection
		 */
// TODO: Is it possible to combine the count with the final query??
		$res_count = $connection->query("SELECT COUNT(*) FROM `Articles`;");
		if($res_count === false){
			echo("Die Anfrage konnte nicht bearbeitet werden.<br />");
			return -1;
		}
		$count = $res_count->fetch_row();			
		$rand = rand(0, ($count[0] - 1) );
		
		$final_query = $connection->query("SELECT heading, teaser, article FROM `Articles` LIMIT " . $rand . ", 1;");
		$result = $final_query->fetch_row();
		$this->randArticleHeading = $result[0];
		$this->randArticleTeaser = $result[1];
		$this->randArticleContent = $result[2];
	}
	
	
	/*
	 * following functions return private article elements for output in other files
	 */
	public function getRandArticleHeading(){
		return $this->randArticleHeading;
	}
	
	public function getRandArticleTeaser(){
		return $this->randArticleTeaser;
	}
	
	public function getRandArticleContent(){
		return $this->randArticleContent;
	}
}
?>
