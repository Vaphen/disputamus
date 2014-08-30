<?php
class CheckInput{
	public $error = "";
	private $pseudonym = "";
	private $heading = "";
	private $content = "";
	function __construct($pseudonym_post, $heading_post, $content_post){
		$this->pseudonym = $pseudonym_post;
		$this->heading = $heading_post;
		$this->content = $content_post;
	}
	function valuesSet(){
		if(strlen($this->pseudonym) == 0 || strlen($this->heading) == 0 || strlen($this->content) == 0){
			$this->error = "<p class=\"errormsg\">Bitte alle Felder ausf&uuml;llen.</p>";
			return FALSE;
		}
		return TRUE;
	}
	
	function pseudoCheck(){
		if(strlen($this->pseudonym) < 1 || strlen($this->pseudonym) > 20)
			$this->error .= "<p class=\"errormsg\">Pseudonym: Das Pseudonym muss mindestens 1 Zeichen lang sein.</p>";
		if(!preg_match("#^[a-zA-Z0-9äöüÄÖÜß]+$#", $this->pseudonym))
				$this->error .= "<p class=\"errormsg\">Pseudonym: Es sind nur Buchstabend und Zahlen im Pseudonym erlaubt.</p>";
	}
	function headingCheck(){
		if(strlen($this->heading) < 3 || strlen($this->heading) > 50)
			$this->error .= "<p class=\"errormsg\">&Uuml;berschrift: Die &Uuml;berschrift muss mindestens 3 Zeichen lang sein.</p>";
		if(!preg_match("#^[a-zA-Z0-9äöüÄÖÜß.()%-&!?: ]+$#", $this->heading))
			$this->error .= "<p class=\"errormsg\">&Uuml;berschrift: erlaubte Zeichen sind A-Z, 1-9, &Auml;&Ouml;&Uuml;&szlig;, '()', ':', '.', '?', '!', '-', '%', '&'</p>";
	}
	function contentCheck(){
		if(strlen($this->content) < 30 || strlen($this->content) > 5000)
			$this->error .= "<p class=\"errormsg\">Ihre Meinung: Eine begr&uuml;ndete Meinung besitzt mindestens 30 Zeichen.</p>";
	}
}

if(isset($_POST['submitComment'])){
	$pseudonym_post = $_POST['pseudonym'];
	$heading_post = $_POST['heading'];
	$content_post = $_POST['content'];
	$secureInput = new CheckInput($pseudonym_post, $heading_post, $content_post);
	if($secureInput->valuesSet()){
		$secureInput->pseudoCheck($pseudonym_post);
		$secureInput->headingCheck($heading_post);
		$secureInput->contentCheck($content_post);
	}
	if($secureInput->error != ""){
		$success = FALSE;
		$secureInput->error .= "<br />";
		echo($secureInput->error);
	}else{
		$content_post = htmlentities($content_post);
		require_once('dbvars.php');
		$connection = new mysqli(HOST, USER, PASSWORD, DATABASE);
		if($insert_query = $connection->prepare("INSERT INTO Comments (articleID, pseudonym, heading, comment) VALUES (?, ?, ?, ?)")){
			$artikelID = 1;
			$insert_query->bind_param("isss", $artikelID, $pseudonym_post, $heading_post, $content_post);
			$insert_query->execute();
			$insert_query->close();	
		}
		$connection->close();	
		echo("<p class=\"success\">Eintrag erfolgreich gespeichert.<br />Er wird ver&ouml;ffentlicht, sobald er &uuml;berpr&uuml;ft wurde.</p><br />");
		$success = TRUE;
		unset($_POST);
		$_POST = array();
	}
}
?>
